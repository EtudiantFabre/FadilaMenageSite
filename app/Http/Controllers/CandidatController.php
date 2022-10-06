<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Models\Candidat;
use App\Models\Agent;
use App\Models\ExperienceDuCandidat;
use App\Models\PersonneAprevenir;

//use Illuminate\Support\Facades\Storage; // <= importer Storage


use Illuminate\Http\Request;
use PDF;

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
        return view('candidats.index',compact('candidats')); }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory
     */
    public function create(Request $request)
    {
        //dd($_POST[poste]);
        return view('candidats.edit');
    }

    public function depotDeCandidature()
    {
        return view('candidats.candidature');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\View\Factory
     */
    public function store(Request $request)
    {

        $rules = [
            'nom' => 'bail|required|string|max:255',
            "prenom" => 'bail|required|string|max:255',
            "date_naissance" => 'bail|date|required',
            "lieu_naissance" => 'bail|required|string',
            "genre" => 'bail|required|string',
            "nationalite" => 'bail|required|string',
            "piece_identite" => 'bail|required',
            "numero_de_piece" => 'bail|required|string',
            "date_delivrer" => 'bail|required',
            "date_expiration" => 'bail|required',
            "ville_residence" => 'bail|required|string',
            "quartier" => 'bail|required|string',
            "rue" => 'bail|required|string',
            "email" => 'bail|required|email',
            "situation_familiale" => 'bail|required',
            "enfants_encharge" => 'bail|required|integer',
            "profession" => 'bail|required|string',
            "telephone" => 'bail|required|string',
            "poste_candidate" => 'bail|required',
            "horaire_travail_souhaite" => 'bail|required',
            "objectif" => 'bail|required|string|max:255',
            "qualite_personnelles" => 'bail|required|string|max:255',
            "savoir_faire" => 'bail|required|string|max:255',
            "disponible_a_loger" => 'bail|required',
            "nature_contrat" => 'bail|required',
            "horaire_travail_passe" => 'bail|required',
            "avatar" => 'bail|required'
        ];

        $this->validate($request, $rules);

        $expe = $request->experience;
        //dd($expe);


        // 2. On upload l'image dans "/storage/app/public/candidat"
         $request->hasFile('avatar');
            $newFile = $request->avatar;
            $file_path = $newFile->store('images');


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
            "situation_familiale" =>$request->situation_familiale,
            "enfants_encharge" => $request->enfants_encharge,
            "profession" => $request->profession,
            "avatar" => $file_path,
            "telephone" => $request->telephone,
            "poste_candidate" => strtoupper($request->poste_candidate),
            "horaire_travail_souhaite" => $request->horaire_travail_souhaite,
            "objectif" => $request->objectif,
            "qualite_personnelles" => $request->qualite_personnelles,
            "savoir_faire" => $request->savoir_faire,
            "pretention_salarial" => $request->pretention_salarial,
            "niveau_etude" => $request->niveau_etude,
            "disponible_a_loger" => $request->disponible_a_loger,
            "nature_contrat" => $request->nature_contrat,
            "horaire_travail_passe" => $request->horaire_travail_passe

        ]);

        // 4. On retourne vers tous les candidat : route("candidats.index")
        if ($expe == 'OUI') {
            return redirect(route("experienceDuCandidats.create"));
        } else {

            return redirect(route("personneAprevenirs.create"));
            //return redirect('/')->with('flash_message', 'Votre candidature est enregisrer ave succès!');

        }




    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Candidat  $candidat
     * @return \Illuminate\Contracts\View\Factory
     */
    public function show(Candidat $candidat)
    {

       /* $pdf = PDF::loadView('candidats.show',compact('candidat'))->setOptions(['defaultFont' => 'Courier', "defaultPaperSize" => "a4",
        "dpi" => 130]);
       return $pdf->stream();*/
       //$experiences = DB::table('experience_du_candidats')->where('candidat', '=', $candidat->id_candidat);

       //dd($experiences);

       $experiences = ExperienceDuCandidat::all()->where('candidat', '=', $candidat->id_candidat);
       $personeAprevenirs = PersonneAprevenir::all()->where('id_candidat', '=', $candidat->id_candidat);
       $key = 0;
       if (count($personeAprevenirs) == 0) {
        $personeAprevenir = 0;
       } elseif (count($experiences) == 0) {
        $experience=0;
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

       return view('candidats.show',compact('candidat','experience','personeAprevenir'));


       /*if (count($experiences) == 0) {
            $experience=0;
            return view('candidats.show',compact('candidat','experience'));

       }else{
            while(! isset($experiences[$key])) {
                $key++;
            }

            $experience = $experiences[$key];

       }

       return view('candidats.show',compact('candidat','experience'));*/


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
        /*$rules = [
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
            "horaire_travail_passe" => 'bail|required'
        ];*/

        /* Si une nouvelle image est envoyée
        if ($request->has("avatar")) {
            // On ajoute la règle de validation pour "picture"
            $rules["avatar"] = 'bail|required|image|max:1024';
        }*/

        //$this->validate($request, $rules);

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
        $experiences = new ExperienceDuCandidat;
        $personeAprevenirs = new PersonneAprevenir;
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
            $agents->horaire_travail_passe = $candidat->horaire_travail_passe;
            $agents->date_retenu = date('d-m-y h:i:s');
            $agents->pretention_salarial = $candidat->pretention_salarial;
            $agents->niveau_etude = $candidat->telephone;
            $agents->telephone = $candidat->telephone;
            $agents->save();
           //dd($agents);

            $last = Agent::find($agents->id_agent);//DB::table('agents')->latest()->get();

            $expe = ExperienceDuCandidat::all()->where('candidat', '=', $candidat->id_candidat);
            $personeApreve = PersonneAprevenir::all()->where('id_candidat', '=', $candidat->id_candidat);

//Log::debug($personeApreve);
                if(count($expe) == null){
                }else{
                    $key = 0;
                    while(! isset($expe[$key])) {
                        $key++;
                    }
                    $experience = $expe[$key];

                    $experiences->agent=$last->id_agent;
                    $experiences->nbr_annee_experience=$experience->nbr_annee_experience;
                    $experiences->nbr_voiture_conduit=$experience->nbr_voiture_conduit;
                    $experiences->type_voiture=$experience->type_voiture;
                    $experiences->type_contrat=$experience->type_contrat;
                    $experiences->nom_employeur=$experience->nom_employeur;
                    $experiences->numero_employeur=$experience->numero_employeur;
                    $experiences->dernier_salaire=$experience->dernier_salaire;
                    $experiences->nombre_enfants_garde=$experience->nombre_enfants_garde;
                    $experiences->date_demission=$experience->date_demission;
                    $experiences->candidat=null;
                    $experiences->save();

                }

                $key = 0;

                while(! isset($personeApreve[$key])) {
                    $key++;
                }

                $personeAprevenir = $personeApreve[$key];

                $personeAprevenirs->agent=$last->id_agent;
                $personeAprevenirs->nom=$personeAprevenir->nom;
                $personeAprevenirs->prenom=$personeAprevenir->prenom;
                $personeAprevenirs->tel=$personeAprevenir->tel;
                $personeAprevenirs->quartier=$personeAprevenir->quartier;
                $personeAprevenirs->profession=$personeAprevenir->profession;
                $personeAprevenirs->lien_de_parente=$personeAprevenir->lien_de_parente;
                $personeAprevenirs->id_candidat=null;
                $personeAprevenirs->save();

           // }
           $suppr = ExperienceDucandidat::where('candidat','=',$candidat->id_candidat)->first();
           $suppr->delete();
           $candidat->delete();

        }
        return redirect('candidats')->with('flash_message', 'Candidat récurté!');

    }
}
