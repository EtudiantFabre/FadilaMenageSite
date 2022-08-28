<?php

namespace App\Http\Controllers;

use App\Models\RelanceContrat;
use Illuminate\Http\Request;

class RelanceContratController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $relanceContrats = RelanceContrat::all();
        return view('relanceContrats.index',compact('relanceContrats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("relanceContrat.edit");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
// 1. La validation
       // $this->validate($request, [

       // ]);

        // 2. On enregistre les informations de la

        RelanceContrat::create([
            "contrat" => $request->contrat,
            "date_relance" => $request->date_relance,
            "client" => $request->client,
            "motif" => $request->motif,
            "situation" => $request->situation,
            "nbr_contrat_encours" => $request->nbr_contrat_encours



        ]);

        // 3. On retourne vers tous les relance :
        return redirect(route("relanceContrat.index"));    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RelanceContrat  $relanceContrat
     * @return \Illuminate\Http\Response
     */
    public function show(RelanceContrat $relanceContrat)
    {
        return view("relanceContrat.show", compact("relanceContrat"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RelanceContrat  $relanceContrat
     * @return \Illuminate\Http\Response
     */
    public function edit(RelanceContrat $relanceContrat)
    {
        return view("relanceContrat.edit", compact("relanceContrat"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RelanceContrat  $relanceContrat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RelanceContrat $relanceContrat)
    {
        $RelanceContrat->update([
            "contrat" => $request->contrat,
            "date_relance" => $request->date_relance,
            "client" => $request->client,
            "motif" => $request->motif,
            "situation" => $request->situation,
            "nbr_contrat_encours" => $request->nbr_contrat_encours
        ]);

        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RelanceContrat  $relanceContrat
     * @return \Illuminate\Http\Response
     */
    public function destroy(RelanceContrat $relanceContrat)
    {
        RelanceContrat::destroy($relanceContrat);
        return redirect('relanceContrat')->with('flash_message', 'relance supprimé!');
    }
}
