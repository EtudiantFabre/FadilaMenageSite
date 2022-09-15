<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use App\Models\Agent;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory
     */
    public function index()
    {
        $clients = Client::all();

        //dd($clients);
        return view('clients.index',compact('clients'));
      }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory
     */
    public function create()
    {
        return view("clients.edit");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\View\Factory
     */
    public function store(Request $request)
    {
        $request->validate([
            "nom" => "required",
            'tel' => "required",
            "ville" => "required",
            "quartier" => "required",
            "email" => "required",
            "type_service_rechercher" => "required",
            "frequence_souhaiter" => "required"
        ]);

        $clients = Client::all()->where("nom", "=", $request->nom)->where("tel", "=", $request->tel)->where("ville", "=", $request->ville);//->first();
        if (count($clients) !=0) {
            session()->flash("message", "Client déjà existant");
        } else {
            $client = Client::create($request->all());    
        }
        
        /*
        //  Affichage de tout les agents (CD 1)
        $agents = Agent::all()->where('poste_candidate', '=', strtoupper($request->type_service_rechercher));
        if ((count($agents) !=0) && (count($clients) !=0)) {
            //session()->flash("message", "Client déjà existant");
            return view("agents.listeAgents")->with('agents', $agents)->with('clients', $clients);
        } else {
            if (count($clients) == 0) {
                return view("agents.listeAgents")->with('agents', $agents)->with('client', $client);//->flash('message', "Aucun agent ne correspond à votre demande !!!");
            }
            //  On ramène le client à la vue de création de client
            return view("clients.create");//->flash('message', "ATTENTION : un client existe déjà sous ce nom. Essayer avec un autre nom");
        }
        */

        return redirect(route("clients.index"));
    }

    public function creerUnClient(){
        return view('clients.creerUnClient');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Contracts\View\Factory
     */
    public function show(Client $client)
    {
        return view("clients.show", compact("client"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Contracts\View\Factory
     */
    public function edit(Client $client)
    {
        return view("clients.edit", compact("client"));
    }


    public function update(Request $request, Client $client)
    {
        $client->update([
            "nom" => $request->nom,
            "tel" => $request->tel,
            "ville" => $request->tel,
            "quartier" => $request->quartier,
            "email" => $request->email,
            "type_service_rechercher" => $request->type_service_rechercher,
            "frequence_souhaiter" => $request->frequence_souhaiter,

        ]);


        // 4. On affiche le client modifié :
        return redirect(route("clients.index", $client));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Contracts\View\Factory
     */
    public function destroy(Client $client)
    {
        $client->delete();
        return redirect(route('clients.index'))->with('flash_message', 'client supprimé!');

    }
}
