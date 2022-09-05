<?php

namespace App\Http\Controllers;

use App\Models\Candidat;
use App\Models\Agent;
//use Illuminate\Support\Facades\Storage; // <= importer Storage


use Illuminate\Http\Request;

class CandidatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory
     */
    public function index()
    {
        $candidats = Candidat::all();
        return view('candidats.index',compact('candidats'));    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory
     */
    public function create()
    {
        return view('candidats.edit');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\View\Factory
     */
    public function store(Request $request)
    {
        /*$this->validate($request, [
            /*'nom' => 'bail|required|string|max:255',
            "prenom" => 'bail|required|string|max:255',
            "date_naissance" => 'bail|required',
            "lieu_naissance" => 'bail|required|string',
            "genre" => 'bail|required|string',
            "nationalite" => 'bail|required|string',
            "piece_identite" => 'bail|required',
            "numero_de_piece" => 'bail|required',
            "date_delivrer" => 'bail|required',
            "date_expiration" => 'bail|required',
            "ville_residence" => 'bail|required',
            "quartier" => 'bail|required',
            "rue" => 'bail|required|string',
            "email" => 'bail|required|email',
            "situation_familiale" => 'bail|required',
            "enfants_encharge" => 'bail|required',
            "profession" => 'bail|required',
            //"avatar" => 'required|image|mimes:png,jpg,jpeg|max:2048',
            "telephone" => 'bail|required',
            "poste_candidate" => 'bail|required',
            "horaire_travail_souhaite" => 'bail|required',
            "objectif" => 'bail|required|string|max:255',
            "qualite_personnelles" => 'bail|required|string|max:255',
            "savoir_faire" => 'bail|required|string|max:255',
            "disponible_a_loger" => 'bail|required',
            "nature_contrat" => 'bail|required',
            "oraire_travail_passe" => 'bail|required'

        ]);*/
        // 2. On upload l'image dans "/storage/app/public/candidat"
        $file = $request->hasFile('avatar');
            $newFile = $request->file('avatar');
            $file_path = $newFile->store('images');
            //dd(asset('/starage/' .$file_path));

        // 3. On enregistre les informations du candidat
       // $input = $request->all();
        Candidat::create([
            'nom' => $request->nom,
            "prenom" => $request->prenom,
            "date_naissance" => $request->date_naissance,
            "lieu_naissance" => $request->lieu_naissance,
            "genre" => $request->genre,
            "nationalite" => $request->nationalite,
            "piece_identite" => $request->piece_identite,
            "numero_de_piece" => $request->numero_de_piece,
            "date_delivrer" => $request->date_delivrer,
            "date_expiration" => $request->date_expiration,
            "ville_residence" => $request->ville_residence,
            "quartier" => $request->quartier,
            "rue" => $request->rue,
            "email" => $request->email,
            "situation_familiale" => "Célibataire",
            "enfants_encharge" => $request->enfants_encharge,
            "profession" => $request->profession,
            "avatar" => $file_path,
            "telephone" => $request->telephone,
            "poste_candidate" => $request->poste_candidate,
            "horaire_travail_souhaite" => $request->horaire_travail_souhaite,
            "objectif" => $request->objectif,
            "qualite_personnelles" => $request->qualite_personnelles,
            "savoir_faire" => $request->savoir_faire,
            "disponible_a_loger" => $request->disponible_a_loger,
            "nature_contrat" => $request->nature_contrat,
            //"oraire_travail_passe" => $request->oraire_travail_passe

        ]);

        // 4. On retourne vers tous les candidat : route("candidats.index")

        return redirect('candidats')->with('flash_message', 'Votre candidature est enregisrer ave succès!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Candidat  $candidat
     * @return \Illuminate\Contracts\View\Factory
     */
    public function show(Candidat $candidat)
    {
       // $candidat = Candidat::find($candidat);
        return view("candidats.show", compact("candidat"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Candidat  $candidat
     * @return \Illuminate\Contracts\View\Factory
     */
    public function edit(Candidat $candidat)
    {
        return view("candidats.edit", compact("candidat"));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Candidat  $candidat
     * @return \Illuminate\Contracts\View\Factory
     */
    public function update(Request $request, Candidat $candidat)
    {
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
            Storage::delete($candidats->avatare);

            $chemin_image = $request->avatar->store("candidats");
            $request['avatar']=$chemin_image;
            // 3. On enregistre les informations du Post
            $input = $request->all();
            $candidat->update($input);
            return redirect('candidats')->with('flash_message', 'Vos modifications sont enregistré!');

        }

        // 3. On met à jour les informations du candidats
        $input = $request->all();
        $candidat->update($input);
        return redirect('candidats')->with('flash_message', 'Vos modifications sont enregistré!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Candidat  $candidat
     * @return \Illuminate\Contracts\View\Factory
     */
    public function destroy(Candidat $candidat)
    {
        $agents = new Agent;
        $agent = Agent::all()->where('numero_de_piece', '=', $candidat->numero_de_piece);
        if (count($agent) !=0) {
            $candidat->delete();
        } else {
            $agents->nom= $candidat->nom;
            $agents->prenom = $candidat->prenom;
            $agents->date_naissance = $candidat->date_naissance;
            $agents->lieu_naissance= $candidat->lieu_naissance;
            $agents->genre= $candidat->genre;
            $agents->nationalite = $candidat->nationalite;
            $agents->piece_identite = $candidat->piece_identite;
            $agents->numero_de_piece = $candidat->numero_de_piece;
            $agents->date_delivrer = $candidat->date_delivrer;
            $agents->date_expiration = $candidat->date_expiration;
            $agents->ville_residence = $candidat->ville_residence;
            $agents->quartier = $candidat->quartier;
            $agents->rue = $candidat->rue;
            $agents->email= $candidat->email;
            $agents->situation_familiale = $candidat->situation_familiale;
            $agents->enfants_encharge = $candidat->enfants_encharge;
            $agents->profession = $candidat->profession;
            $agents->avatar = $candidat->avatar;
            $agents->poste_candidate = $candidat->poste_candidate;
            $agents->horaire_travail_souhaite = $candidat->horaire_travail_souhaite;
            $agents->objectif = $candidat->objectif;
            $agents->qualite_personnelles = $candidat->objectif;
            $agents->savoir_faire = $candidat->savoir_faire;
            $agents->disponible_a_loger = $candidat->disponible_a_loger;
            $agents->nature_contrat = $candidat->nature_contrat;
            $agents->oraire_travail_passe = "temps plein";
            $agents->date_retenu = date('d-m-y h:i:s');
            $agents->status = 'disponible';

            $agents->telephone = $candidat->telephone;
            $agents->save();
            $candidat->delete();

        }
        return redirect('candidats')->with('flash_message', 'Candidat supprimé!');

    }
}
