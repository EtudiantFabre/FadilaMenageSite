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
        $appel_offres = AppelOffre::all();
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
        return view('appelOffres.show');
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
            return view('appelOffres.edit', compact('appelOffre'));
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
