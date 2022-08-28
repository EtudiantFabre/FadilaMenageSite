<?php

namespace App\Http\Controllers;

use App\Models\Personnel;
use Illuminate\Http\Request;

class PersonnelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personnels = Client::all();
        return view('personnels.index',compact('personnels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("personnels.edit");
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


        Personnel::create([
            "nom" => $request->nom,
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
            "situation_familiale" => $request->situation_familiale,
            "enfants_encharge" => $request->enfants_encharge,
            "profession" => $request->profession,
            "photo_id" => $request->photo_id,
            "avatar" => $request->avatar,
            "salaire" => $request->salaire,
            "post_ocuper" => $request->post_ocuper,
            "nature_contrat" => $request->nature_contrat,
            "telephone" => $request->telephone,


        ]);

        // 3. On retourne vers tous les personnels :
        return redirect(route("personnels.index"));
        }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Personnel  $personnel
     * @return \Illuminate\Http\Response
     */
    public function show(Personnel $personnel)
    {
        return view("personnels.show", compact("personnel"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Personnel  $personnel
     * @return \Illuminate\Http\Response
     */
    public function edit(Personnel $personnel)
    {
        return view("personnels.edit", compact("personnel"));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Personnel  $personnel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Personnel $personnel)
    {
        $personnel->update([
            "nom" => $request->nom,
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
            "situation_familiale" => $request->situation_familiale,
            "enfants_encharge" => $request->enfants_encharge,
            "profession" => $request->profession,
            "photo_id" => $request->photo_id,
            "avatar" => $request->avatar,
            "salaire" => $request->salaire,
            "post_ocuper" => $request->post_ocuper,
            "nature_contrat" => $request->nature_contrat,
            "telephone" => $request->telephone,

        ]);


        // 4. On affiche le client modifié :
    return redirect(route("personnels.show", $personnel));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Personnel  $personnel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Personnel $personnel)
    {
        Personnel::destroy($personnel);
        return redirect('personnel')->with('flash_message', 'personnel supprimé!');
    }
}
