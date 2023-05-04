<?php

namespace App\Http\Controllers\REST;

use App\Http\Controllers\Controller;
use App\Models\Region;
use Illuminate\Http\Request;

class regionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $region = region::all ();
        return response()->json($region,200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        try{
            \DB::beginTransaction();
            $region = Region::create([
                'label' => $request->label,
            ]);
            \DB::commit();
            return response()->json($region, 201);
        } catch (\throwable $th) {
            return response()->json('{ "error" : "Impossible de sauvegarder"}'.$th, 404);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Region  $region
     * @return \Illuminate\Http\Response
     */
    public function show(Region $region)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Region  $region
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,int $id)
    {
        //
        try{
            $region = region::find($id);
            $region->update($request->all());
            response()->json("{'Modification reussie'}",200);
            return $region;
        } catch(Throwable $th) {
            dd($error);
            return response()->json("{'Erreur: Impossible de modifier cette region'}", 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Region  $region
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        //
        try{

            $region = Region::find($id);
            $region->delete();
            return response()->json(['message'=>'Région supprimée avec succès !']);
        } catch(\Throwable $th) {
            return response()->json('{ "error" : "Impossible de supprimer cette region"}'.$th, 404);
        }
    }
}
