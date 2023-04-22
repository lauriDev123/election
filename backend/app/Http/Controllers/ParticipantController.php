<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\participant;
use \App\Models\Region;
use \App\Models\Vote;
use Illuminate\Support\Facades\DB;

class ParticipantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
        {
            $regions = Region::orderBy('label')->get();
            $votes = Vote::orderBy('dateVote')->get();
            return view('formulaire_participant', compact('regions','votes'));
        }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function save(Request $validated)
        {
            $query = DB::table('participant')->insert([
                'nom' => $validated->input('nom'),
                'num_cni' => $validated->input('num_cni'),
                'age' => $validated->input('age'),
                'sexe' => $validated->input('sexe'),
                'status' => $validated->input('status'),
                'login' => $validated->input('login'),
                'pwd' => $validated->input('pwd'),
                'email' => $validated->input('email'),
                'etat' => $validated->input('etat'),
                'telephone' => $validated->input('telephone'),
                'id_region' => $validated->input('id_region'),
                'id_vote' => $validated->input('id_vote')
            ]);
            return "Participant ajouté avec succès";
        }

        public function returnBack ()
            {
                return back();
            }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getAllParticipants()
    {
        $participants = DB::table('participant')
                        ->join('regions','participant.id_region' , '=','regions.id')
                        ->join('votes','participant.id_vote','votes.id')
                        ->select(
                            'participant.*',
                            'regions.label',
                            'votes.dateVote')
                        ->get();
        return view ('liste_participant' , ['participant' => $participants]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editParticipantById()
    {
            return view("participant_update");
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deleteParticipantById($id)
    {
        try{
            DB::beginTransaction();
            participant::find($id)->delete();
            DB::commit();
            return redirect("/participant_list");
        } catch(\Throwable $th) {
            return back();
        }
    }
}
