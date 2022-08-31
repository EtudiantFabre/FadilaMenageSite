<?php

namespace App\Http\Controllers;

use App\Models\Prospection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Models\Client;
use App\Models\Agent;
use App\Models\Facture;

class ProspectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prospections = Prospection::all();
        //echo 'Rien de bon';
        return view('prospections.index', compact('prospections'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clients = Client::all();
        $agents = Agent::all();
        $factures = Facture::all();
        return view('prospections.create')->with('clients', $clients)->with('agents', $agents)->with('factures', $factures);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'raison_social' => "required",
            'date', 'canal' => "required", 
            'competence_rechercher' => "required",
            'type_maison' =>"required", 
            'nbre_de_chambre' => "required", 
            'nbre_wc_douche' => "required", 
            'taille_famille' => "required", 
            'info_complementaire' => "required", 
            'budget' => "required", 
            'actions_menees' => "required", 
            'conclusion' => "required", 
            'id_agent' => "required", 
            'id_client' => "required", 
            'id_facture' => "required"
        ]);

        $prospection = Prospection::all()->where('date', "=", $request->date)->where('id_agent', "=", $request->id_agent)->where('id_client', "=", $request->id_client);
        if (count($prospection) !=0) {
            
        } else {
            Prospection::create(
                $request->all()
            );
        }
        return redirect()->route('prospections.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Prospection  $prospection
     * @return \Illuminate\Http\Response
     */
    public function show(Prospection $prospection)
    {
        
        return view('prospections.show')->with('prospection', $prospection);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Prospection  $prospection
     * @return \Illuminate\Http\Response
     */
    public function edit(Prospection $prospection)
    {
        if (View::exists('prospections.edit')){
            $clients = Client::all();
            $agents = Agent::all();
            $factures = Facture::all();
            return view('prospections.edit', compact('prospection'))->with('clients', $clients)->with('agents', $agents)->with('factures', $factures);;
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Prospection  $prospection
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Prospection $prospection)
    {
        $request->validate([
            'raison_social' => "required",
            'date' => "required",
            'canal' => "required", 
            'competence_rechercher' => "required",
            'type_maison' =>"required", 
            'nbre_de_chambre' => "required", 
            'nbre_wc_douche' => "required", 
            'taille_famille' => "required", 
            'info_complementaire' => "required", 
            'budget' => "required", 
            'actions_menees' => "required", 
            'conclusion' => "required", 
            'id_agent' => "required", 
            'id_client' => "required", 
            'id_facture' => "required"
        ]);

        $prospection->raison_social = $request->raison_social;
        $prospection->date = $request->date;
        $prospection->canal = $request->canal;
        $prospection->competence_rechercher = $request->competence_rechercher;
        $prospection->type_maison = $request->type_maison;
        $prospection->nbre_de_chambre = $request->nbre_de_chambre;
        $prospection->nbre_wc_douche = $request->nbre_wc_douche;
        $prospection->taille_famille = $request->taille_famille;
        $prospection->info_complementaire = $request->info_complementaire;
        $prospection->budget = $request->budget;
        $prospection->actions_menees = $request->actions_menees;
        $prospection->conclusion = $request->conclusion;
        $prospection->id_agent = $request->id_agent;
        $prospection->id_client = $request->id_client;
        $prospection->id_facture = $request->id_facture;

        $prospection->save();

        return redirect()->route('prospections.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Prospection  $prospection
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prospection $prospection)
    {
        
        $prospection->delete();
        return redirect()->route('prospections.index');
    }
}
