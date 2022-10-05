<?php

namespace App\Http\Controllers;
use App\Models\ExperienceDuCandidat;
use App\Models\PersonneAprevenir;
use App\Models\Agent;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Storage;


class AgentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory
     */
    public function index()
    {
        $agents = Agent::all();

        return view('agents.index',compact('agents'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory
     */
    public function create()
    {

        return view('agents.create');

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

            'nom' => 'required',
            'prenom' => 'required',
            'date_offre' => 'required',
            'domaine'    => 'required'
        ]);


        $agents = new  Agent;
        $agents->id_agent = $request->id_agent;
        $agents->nom= $request->nom;
        $agents->prenom = $request->prenom;
        $agents->date_naissance = $request->date_naissance;
        $agents->lieu_naissance= $request->lieu_naissance;
        $agents->genre= $request->genre;
        $agents->email= $request->email;
        $agents->situation_familiale = $request->situation_familiale;
        $agents->nationalite = $request->nationalite;
        $agents->enfants_encharge = $request->enfants_encharge;
        $agents->profession = $request->profession;
        $agents->status = $request->status;
        $agents->avatar = $request->avatar;
        $agents->date_retenu = $request->date_retenu;
        $agents->nationalite = $request->nationalite;
        $agents->photo_id = $request->avatar;
        $agents->numero_de_piece = $request->numero_de_piece;
        $agents-> date_expiration = $request-> date_expiration;
        $agents->date_delivrer = $request->date_delivrer;
        $agents->ville_residence = $request->ville_residence;
        $agents->quartier = $request->quartier;
        $agents->rue = $request->rue;
        $agents->telephone = $request->telephone;
        $agents->save();
        //return redirect()->route('agents.store');



        return redirect()->route('agents.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Agent  $agent
     * @return \Illuminate\Contracts\View\Factory
     */
    public function show(Agent $agent)
    {

       $experiences = ExperienceDuCandidat::all()->where('agent', '=', $agent->id_agent);
       $personeAprevenirs = PersonneAprevenir::all()->where('agent', '=', $agent->id_agent);
       //dd($personeAprevenirs);
       $experience= null;
       $key = 0;
       if (count($personeAprevenirs) == 0) {
        $personeAprevenir = null;
       } elseif (count($experiences) == 0) {

        while(! isset($personeAprevenirs[$key])) {
            $key++;
        }

        $personeAprevenir = $personeAprevenirs[$key];

       } else {
            while(! isset($experiences[$key])) {
                $key++;
            }

            $experience = $experiences[$key];

            $key = 0;

            while(! isset($personeAprevenirs[$key])) {
                $key++;
            }

            $personeAprevenir = $personeAprevenirs[$key];

       }



       return view('agents.show',compact('agent','experience','personeAprevenir'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Agent  $agent
     * @return \Illuminate\Contracts\View\Factory
     */
    public function edit(Agent $agent)
    {

        if (View::exists('agents.edit')){
            return view('agents.edit', compact('agent'));
        }


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Agent  $agent
     * @return \Illuminate\Contracts\View\Factory
     */
    public function update(Request $request, Agent $agent)
    {

         // 1. La validation


        $rules = [
            'nom' => 'bail|required|string|max:255',
            "prenom" => 'bail|required|string|max:255',
            "date_naissance" => 'bail|required',
            "lieu_naissance" => 'bail|required|string',
            "genre" => 'bail|required|string',
            "nationalite" => 'bail|required|string',
            "piece_identite" => 'bail|required',
            "numero_de_piece" => 'bail|required|alpha',
            "date_delivrer" => 'bail|required',
            "date_expiration" => 'bail|required',
            "ville_residence" => 'bail|required',
            "quartier" => 'bail|required',
            "rue" => 'bail|required|string',
            "email" => 'bail|required|email',
            "situation_familiale" => 'bail|required',
            "enfants_encharge" => 'bail|required',
            "profession" => 'bail|required',
            "telephone" => 'bail|required',
            "poste_candidate" => 'bail|required',
            "horaire_travail_souhaite" => 'bail|required',
            "objectif" => 'bail|required|string|max:255',
            "qualite_personnelles" => 'bail|required|string|max:255',
            "savoir_faire" => 'bail|required|string|max:255',
            "disponible_a_loger" => 'bail|required',
            "nature_contrat" => 'bail|required',
            "oraire_travail_passe" => 'bail|required'
        ];


        // Si une nouvelle image est envoyée
        if ($request->has("avatar")) {
            // On ajoute la règle de validation pour "picture"
            $rules["avatar"] = 'bail|required|image|max:1024';
        }

        $this->validate($request, $rules);

        // 2. On upload l'image dans "/storage/app/public/candidats"
        if ($request->has("avatar")) {

            //On supprime l'ancienne image
            Storage::delete($agent->avatare);

            $chemin_image = $request->avatar->store("candidats");
            $request['avatar']=$chemin_image;
            // 3. On met à jour les informations de l'agent
            $input = $request->all();
            $candidat->update($input);
            return redirect('agents')->with('flash_message', 'Vos modifications sont enregistré!');

        }


        // 3. On met à jour les informations de l'agent
        $input = $request->all();
        $candidat->update($input);
        return redirect('agents')->with('flash_message', 'Vos modifications sont enregistré!');



    }

    public function ListAgents(Request $request)
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

        /*//dd($request);
        $agents = Agent::all()->where('ville_residence', '=', $request->ville)->where('poste_candidate', '=', $request->type_service_rechercher);
        return view('agents.listAgents')->with('agents', $agents)->with('agents', $agents);*/

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Agent  $agent
     * @return \Illuminate\Contracts\View\Factory
     */
    public function destroy(Agent $agent)
    {

    $agent->delete();

    // Redirection route "posts.index"
    return redirect(route('agents.index'));

    }
	/**
	 */
	function __construct() {
	}
}
