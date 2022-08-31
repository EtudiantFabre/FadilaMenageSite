<?php

namespace App\Http\Controllers;

use App\Models\Vente;
use App\Models\Personnel;

use Illuminate\Http\Request;

class VenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ventes = Vente::all();
        return view('ventes.index',compact('ventes'));
     }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $personnels = Personnel::all();
        return view("ventes.edit")->with('personnels', $personnels);

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


        // 2. On enregistre les informations de la
        $input = $request->all();

    Vente::create([
    "personnel" => $request->personnel,
    "mois" => $request->mois,
    "contrat_permanent" => $request->contrat_permanent,
    "contrat_permanent_perdus" => $request->contrat_permanent_perdus,
    "contrat_gagne" => $request->contrat_gagne,
    "solde_contrat" => $input['contrat_permanent']+$input['contrat_gagne']-$input['contrat_permanent_perdus'],
    "contrat_ponctuel" => $request->contrat_ponctuel,
    "marche_public" => $request->marche_public,
    "commentaire" => $request->commentaire,
    "total_client_findu_mois" => $request->total_client_findu_mois,
    "ca_total_mensuel_realiser" => $request['solde_contrat']+$request['total_client_findu_mois'],


]);

// 3. On retourne vers tous les ventes :
return redirect(route("ventes.index"));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vente  $vente
     * @return \Illuminate\Http\Response
     */
    public function show(Vente $vente)
    {
        return view("ventes.show", compact("vente"));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vente  $vente
     * @return \Illuminate\Http\Response
     */
    public function edit(Vente $vente)
    {
        $personnels = Personnel::all();
       // return view("ventes.edit")->with('personnels', $personnels);

        return view("ventes.edit", compact("vente","personnels"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vente  $vente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vente $vente)
    {
        $input = $request->all();

        $vente->update([
            "personnel" => $request->personnel,
            "mois" => $request->mois,
            "contrat_permanent" => $request->contrat_permanent,
            "contrat_permanent_perdus" => $request->contrat_permanent_perdus,
            "contrat_gagne" => $request->contrat_gagne,
            "solde_contrat" => $input['contrat_permanent']+$input['contrat_gagne']-$input['contrat_permanent_perdus'],
            "contrat_ponctuel" => $request->contrat_ponctuel,
            "marche_public" => $request->marche_public,
            "commentaire" => $request->commentaire,
            "total_client_findu_mois" => $request->total_client_findu_mois,
            "ca_total_mensuel_realiser" => $request['solde_contrat']+$request['total_client_findu_mois'],

        ]);

        // 4. On affiche les ventes modifié :
    return redirect(route("ventes.index", $vente));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vente  $vente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vente $vente)
    {
        $vente->delete();
        return redirect('ventes')->with('flash_message', 'vente supprimé!');

    }
}
