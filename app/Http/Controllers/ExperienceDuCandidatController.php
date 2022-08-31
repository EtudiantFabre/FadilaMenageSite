<?php

namespace App\Http\Controllers;

use App\Models\ExperienceDuCandidat;
use Illuminate\Http\Request;
use App\Models\Candidat;


class ExperienceDuCandidatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $experienceDuCandidats = ExperienceDuCandidat::latest()->get();

        // On transmet les Post à la vue
        return view("experienceDuCandidats.index", compact("experienceDuCandidats"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $candidats = Candidat::all();
        return view("experienceDuCandidats.edit",compact('candidats'));
        //return view("experienceDuCandidats.edit");

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


         // 2. On enregistre les informations de lexperience du candidat
         ExperienceDuCandidat::create([
            "nbr_annee_experience" => $request->nbr_annee_experience,
            "nbr_voiture_conduit" => $request->nbr_voiture_conduit,
            "type_voiture" => $request->type_voiture,
            "type_contrat" => $request->type_contrat,
            "adresse_societe" => $request->adresse_societe,
            "adresse_employeur" => $request->adresse_employeur,
            "dernier_salaire" => $request->dernier_salaire,
            "date_demission" => $request->date_demission,
            "pretention_salarial" => $request->pretention_salarial,
            "candidat" => $request->id_candidat


        ]);
        
        // 3. On retourne vers tous les experiences :
        return redirect(route("experienceDuCandidats.index"));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ExperienceDuCandidat  $experienceDuCandidat
     * @return \Illuminate\Http\Response
     */
    public function show(ExperienceDuCandidat $experienceDuCandidat)
    {
        return view("experienceDuCandidats.show", compact("experienceDuCandidat"));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ExperienceDuCandidat  $experienceDuCandidat
     * @return \Illuminate\Http\Response
     */
    public function edit(ExperienceDuCandidat $experienceDuCandidat)
    {
        return view("experienceDuCandidats.edit", compact("experienceDuCandidat"));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ExperienceDuCandidat  $experienceDuCandidat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ExperienceDuCandidat $experienceDuCandidat)
    {
        // 1. La validation

    // Les règles de validation pour "title" et "content"
   // $rules = [
    //    'title' => 'bail|required|string|max:255',
    //    "content" => 'bail|required',
    //];

    // 2. On met à jour les experinces
    $experienceDuCandidat->update([
        "nbr_annee_experience" => $request->nbr_annee_experience,
            "nbr_voiture_conduit" => $request->nbr_voiture_conduit,
            "type_voiture" => $request->type_voiture,
            "type_contrat" => $request->type_contrat,
            "adresse_societe" => $request->adresse_societe,
            "adresse_employeur" => $request->adresse_employeur,
            "dernier_salaire" => $request->dernier_salaire,
            "date_demission" => $request->date_demission,
            "pretention_salarial" => $request->pretention_salarial,
            "candidat" => $request->id_candidat


    ]);

    // 4. On affiche les informatins modifié :
    return redirect(route("experienceDuCandidats.show", $experienceDuCandidat));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ExperienceDuCandidat  $experienceDuCandidat
     * @return \Illuminate\Http\Response
     */
    public function destroy(ExperienceDuCandidat $experienceDuCandidat)
    {
        $experienceDuCandidat->delete();
        return redirect('experienceDuCandidats')->with('flash_message', 'experience supprimé!');

    }
}
