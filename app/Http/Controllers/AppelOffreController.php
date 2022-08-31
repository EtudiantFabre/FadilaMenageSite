<?php

namespace App\Http\Controllers;

use App\Models\AppelOffre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Models\Personnel;
use App\Models\Societe;

class AppelOffreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $appel_offres = AppelOffre::orderBy('id_appel')->simplePaginate(10);
        //echo 'Rien de bon';
        return view('appelOffres.index', compact('appel_offres'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $personnels = Personnel::all()->where('post_ocuper', '=', 'MARKETING');
        $societes = Societe::all();
        return view('appelOffres.create')->with('personnels', $personnels)->with('societes', $societes);
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
            'date_invitation' => 'required|date',
            'autorite_contractante' => 'required',
            'numero_aao' => 'required',
            'montant_propose' => 'required|integer',
            'nbre_concurents' => 'required|integer',

            'classement' => 'required',
            'ville' => 'required',
            'quartier' => 'required',
            'date_depot' => 'required',
            'domaine_postule' => 'required',
            'prix_achat_dossier' => 'required',
            'caution_bancaire' => 'required',
            'resultat' => 'required',
            'debut_prestation' => 'required',
            'id_societe' => 'required',
            'id_personnel' => 'required',
        ]);

        $request['adresse_autorite_contractante'] = array(
            'ville'=>$request->ville,
            'quartier'=>$request->quartier,
        );

        $appelOffre= AppelOffre::all()->where('classement', '=', $request->classement)->where('date_depot', '=', $request->date_depot)->where('id_societe', '=', $request->id_societe);
        if (count($appelOffre) != 0) {
        } else {
            AppelOffre::create($request->all());
        }
        return redirect()->route('appelOffres.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AppelOffre  $appelOffre
     * @return \Illuminate\Http\Response
     */
    public function show(AppelOffre $appelOffre)
    {
        return view('appelOffres.show')->with('appel', $appelOffre);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AppelOffre  $appelOffre
     * @return \Illuminate\Http\Response
     */
    public function edit(AppelOffre $appelOffre)
    {
        if (View::exists('appelOffres.edit')){
            $personnels = Personnel::all()->where('post_ocuper', '=', 'MARKETING');
            $societes = Societe::all();
            return view('appelOffres.edit')->with('appel', $appelOffre)->with('personnels', $personnels)->with('societes', $societes);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AppelOffre  $appelOffre
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AppelOffre $appelOffre)
    {
        $request->validate([
            'date_invitation' => 'required|date',
            'autorite_contractante' => 'required',
            'numero_aao' => 'required',
            'montant_propose' => 'required|integer',
            'nbre_concurents' => 'required|integer',

            'classement' => 'required',
            'ville' => 'required',
            'quartier' => 'required',
            'date_depot' => 'required',
            'domaine_postule' => 'required',
            'prix_achat_dossier' => 'required',
            'caution_bancaire' => 'required',
            'resultat' => 'required',
            'debut_prestation' => 'required',
            'id_societe' => 'required',
            'id_personnel' => 'required',
        ]);

        $request['adresse_autorite_contractante'] = array(
            'ville'=>$request->ville,
            'quartier'=>$request->quartier,
        );

        $appelOffre->date_invitation = $request->date_invitation;
        $appelOffre->autorite_contractante = $request->autorite_contractante;
        $appelOffre->numero_aao = $request->numero_aao;
        $appelOffre->montant_propose = $request->montant_propose;
        $appelOffre->nbre_concurents = $request->nbre_concurents;
        $appelOffre->classement = $request->classement;
        $appelOffre->adresse_autorite_contractante = $request->adresse_autorite_contractante;
        $appelOffre->date_depot = $request->date_depot;
        $appelOffre->domaine_postule = $request->domaine_postule;
        $appelOffre->prix_achat_dossier = $request->prix_achat_dossier;
        $appelOffre->caution_bancaire = $request->caution_bancaire;
        $appelOffre->resultat = $request->resultat;
        $appelOffre->debut_prestation = $request->debut_prestation;
        $appelOffre->id_societe = $request->id_societe;
        $appelOffre->id_personnel = $request->id_personnel;

        $appelOffre->save();
        return redirect()->route('appelOffres.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AppelOffre  $appelOffre
     * @return \Illuminate\Http\Response
     */
    public function destroy(AppelOffre $appelOffre)
    {
        $appelOffre->delete();
        return redirect()->route('appelOffres.index');
    }
}
