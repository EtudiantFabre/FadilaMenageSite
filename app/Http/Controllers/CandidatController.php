<?php

namespace App\Http\Controllers;

use App\Models\Candidat;
use App\Models\Agent;

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

         // 1. La validation
       // $this->validate($request, [
       //     "picture" => 'bail|required|image|max:1024',
        //]);
        // 2. On upload l'image dans "/storage/app/public/candidat"
        $nom_image = $request->avatar->store("candidats");
       // dd($nom_image);
        $request['avatar']=$nom_image;
        //dd($request);
        $input = $request->all();
        Candidat::create($input);
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

        // Si une nouvelle image est envoyée
    //if ($request->has("avatar")) {
        // On ajoute la règle de validation pour "picture"
        //$rules["avatar"] = 'bail|required|image|max:1024';
    //}

   // $this->validate($request, $rules);

    // 2. On upload l'image dans "/storage/app/public/candidats"
    if ($request->has("avatar")) {

        //On supprime l'ancienne image
        Storage::delete($candidat->avatar);

        $request->picture->store("candidats");
    }

       // $candidat = Candidat::find($candidat);
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
            $agents->photo_id = $candidat->avatar;
            $agents->poste_candidate = $candidat->poste_candidate;
            $agents->horaire_travail_souhaite = $candidat->horaire_travail_souhaite;
            $agents->objectif = $candidat->objectif;
            $agents->qualite_personnelles = $candidat->objectif;
            $agents->savoir_faire = $candidat->savoir_faire;
            $agents->disponible_a_loger = $candidat->disponible_a_loger;
            $agents->nature_contrat = $candidat->nature_contrat;
            $agents->oraire_travail_passe = $candidat->oraire_travail_passe;
            $agents->date_retenu = date('d-m-y h:i:s');
            $agents->status = 'disponible';

            $agents->telephone = $candidat->telephone;
            $agents->save();
            $candidat->delete();

        }
        return redirect('candidats')->with('flash_message', 'Candidat supprimé!');

    }
}
