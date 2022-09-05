<?php

namespace App\Http\Controllers;

use App\Models\Personnel;
use Illuminate\Http\Request;

class PersonnelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory
     */
    public function index()
    {
        $personnels = Personnel::all();
        return view('personnels.index',compact('personnels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory
     */
    public function create()
    {
        return view("personnels.edit");
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

       // ]);

        // 2. On enregistre les informations de la

       $nom_image = $request->avatar->store("personnels");
       // dd($nom_image);
        $request['avatar']=$nom_image;
        //dd($request);
        $input = $request->all();
        Personnel::create($input);


        // 3. On retourne vers tous les personnels :
        return redirect('personnels')->with('flash_message', 'Le personnels est enregisré avec succès!');
        }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Personnel  $personnel
     * @return \Illuminate\Contracts\View\Factory
     */
    public function show(Personnel $personnel)
    {
        return view("personnels.show", compact("personnel"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Personnel  $personnel
     * @return \Illuminate\Contracts\View\Factory
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
     * @return \Illuminate\Contracts\View\Factory
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
            "enfants_encharge" => $request->enfants_en_charge,
            "profession" => $request->profession,
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
     * @return \Illuminate\Contracts\View\Factory
     */
    public function destroy(Personnel $personnel)
    {
        $personnel->delete();
        return redirect('personnel')->with('flash_message', 'personnel supprimé!');
    }
}
