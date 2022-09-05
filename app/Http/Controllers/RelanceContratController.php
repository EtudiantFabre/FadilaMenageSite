<?php

namespace App\Http\Controllers;

use App\Models\RelanceContrat;
use App\Models\Contrat;
use App\Models\Client;


use Illuminate\Http\Request;

class RelanceContratController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory
     */
    public function index()
    {
        $relanceContrats = RelanceContrat::all();
        return view('relanceContrats.index',compact('relanceContrats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory
     */
    public function create()
    {
        $contrats = Contrat::all();
        $clients = Client::all();

        return view("relanceContrats.edit")->with('contrats', $contrats)->with('clients', $clients);
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\View\Factory
     */
    public function store(Request $request)
    {
// 1. La validation
       // $this->validate($request, [

       // ]);

        // 2. On enregistre les informations de la

        $input = $request->all();
        RelanceContrats::create($input);
        // 3. On retourne vers tous les relance :
        return redirect(route("relanceContrat.index"));
      }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RelanceContrat  $relanceContrat
     * @return \Illuminate\Contracts\View\Factory
     */
    public function show(RelanceContrat $relanceContrat)
    {
        return view("relanceContrat.show", compact("relanceContrat"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RelanceContrat  $relanceContrat
     * @return \Illuminate\Contracts\View\Factory
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
     * @return \Illuminate\Contracts\View\Factory
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
     * @return \Illuminate\Contracts\View\Factory
     */
    public function destroy(RelanceContrat $relanceContrat)
    {
      $relanceContrat->delete();
        return redirect('relanceContrats')->with('flash_message', 'relance supprimé!');
    }
}
