<?php

namespace App\Http\Controllers\REST;

use App\Http\Controllers\Controller;
use App\Models\participant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class participantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $participant = participant::all ();
        return response()->json($participant,200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $this->validate($request,
        // [
        //     'nom' => 'required|max:100',
        //     'num_cni' => 'required|unique:participant',
        //     'age' => 'required|max:100',
        //     'sexe' => 'required',
        //     'status' => 'required',
        //     'id_region' => 'required',
        //     'login' => 'required',
        //     'pwd' => 'required|min:8',
        //     'email' => 'required|email|unique:participant',
        // ]);

        try{
            \DB::beginTransaction();
            $participant = Participant::create([
                'nom' => $request->nom,
                'num_cni' => $request->num_cni,
                'age' => $request->age,
                'sexe' => $request->sexe,
                'status' => $request->status,
                'login' => $request->login,
                'pwd' => Hash::make ($request->pwd),
                'email' => $request->email,
                'etat' => $request->etat,
                'telephone' => $request->telephone,
                'id_region' => $request->id_region
            ]);
            \DB::commit();
            return response()->json($participant, 201);
        } catch (\throwable $th) {
            return response()->json('{ "error" : "Impossible de sauvegarder"}'.$th, 404);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\participant  $participant
     * @return \Illuminate\Http\Response
     */
    public function show(participant $participant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\participant  $participant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, participant $participant)
    {
        try{
            $participant = participant::find($id);
            $participant->update($request->all());
            response()->json("{'Modufication reussie'}",200);
            return $participant;
        } catch(Throwable $th) {
            return response()->json("{''Erreur: Impossible de modifier ce participant}", 404);

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\participant  $participant
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{

            $participant = participant::find($id);
            $participant->delete();

            return response()->json(['message'=>'Participant supprimé avec succès !']);
        } catch(\Throwable $th) {
            return response()->json('{ "error" : "Impossible de supprimer ce participant"}'.$th, 404);
        }
    }

    public function onOff($id) {
        try {
            \DB::beginTransaction();
            $part = participant::find($id);
            $part->etat =!($part->etat);
            $part->update();

            \DB::commit();
            return response()->json("Operation reussie");
        } catch (Throwable $th) {
            return response ()->json("Echec de l\'operation");
        }
    }
}
