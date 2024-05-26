<?php

namespace App\Http\Controllers;

use App\Models\Contrat;
use App\Models\Agent;
use App\Models\Client;

use Illuminate\Http\Request;

class ContratController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory
     */
    public function index()
    {
        $contrats = Contrat::all();
        return view('contrats.index',compact('contrats'));
     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory
     */
    public function create()
    {
        $agents = Agent::all();
        $clients = Client::all();
        return view('contrats.edit')->with('clients', $clients)->with('agents', $agents);
        //return view("contrats.edit",compact('clients', 'agents'));
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
        $margnet = $request['salaire']*30/100;
        $tva = $margnet *18/100;
        Contrat::create([
            "agent" => $request->id_agent,
            "client" => $request->id_client,
            "date_contrat" => $request->date_contrat,
            "debut_contrat" => $request->debut_contrat,
            "echeance_contrat" => $request->echeance_contrat,
            "service" => $request->service,
            "local" => $request->local,
            "adresse" => $request->adresse,
            "temps" => $request->temps,
            "frequence" => $request->frequence,
            "salaire" => $request->salaire,
            "marge_nette" => $margnet,
            "tva" => $tva,
            "facturation" => $request['salaire']+$margnet+$tva,
            "status" => $request->status
        ]);

        // 3. On retourne vers tous les relance :
        return redirect(route("contrats.index"));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contrat  $contrat
     * @return \Illuminate\Contracts\View\Factory
     */
    public function show(Contrat $contrat)
    {
        return view("contrats.show", compact("contrat"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contrat  $contrat
     * @return \Illuminate\Contracts\View\Factory
     */
    public function edit(Contrat $contrat)
    {
        $agents = Agent::all();
        $clients = Client::all();
        return view('contrats.edit')->with('clients', $clients)->with('agents', $agents);
       // return view("contrats.edit",compact('clients', 'agents'));
        //return view("contrat.edit", compact("contrat"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contrat  $contrat
     * @return \Illuminate\Contracts\View\Factory
     */
    public function update(Request $request, Contrat $contrat)
    {
        $contrat->update([
            "agent" => $request->agent,
            "client" => $request->client,
            "date_contrat" => $request->date_contrat,
            "debut_contrat" => $request->debut_contrat,
            "echeance_contrat" => $request->echeance_contrat,
            "service" => $request->service,
            "local" => $request->local,
            "adresse" => $request->adresse,
            "temps" => $request->temps,
            "frequence" => $request->frequence,
            "agent_assigne" => $request->agent_assigne,
            "facturation" => $request->facturation,
            "salaire" => $request->salaire,
            "tva" => $request->tva,
            "marge_nette" => $request->marge_nette,
            "status" => $request->status
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contrat  $contrat
     * @return \Illuminate\Contracts\View\Factory
     */
    public function destroy(Contrat $contrat)
    {
        $contrat->delete();
        return redirect('contrats')->with('flash_message', 'relance supprimé!');
    }
}
