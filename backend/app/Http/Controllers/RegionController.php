<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Region;
use Illuminate\Support\Facades\DB;

class RegionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getAllRegions()
    {
        $list = Region::all();
        return view('liste_region',compact('list'));
    }
    public function returnBack ()
            {
                return back();
            }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('formulaire_region');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function save(Request $validated)
        {

            $query = DB::table('regions')->insert([
                'label' => $validated->input('label')
            ]);
            return redirect("/region_list");
        }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editRegionById()
    {
            return view("region_update");
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
    public function deleteRegionById($id)
    {
        try{
            DB::beginTransaction();
            Region::find($id)->delete();
            DB::commit();
            return redirect("/region_list");
        } catch(\Throwable $th) {
            return back();
        }
    }
}
