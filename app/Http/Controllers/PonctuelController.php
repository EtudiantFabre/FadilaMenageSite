<?php

namespace App\Http\Controllers;

use App\Models\Ponctuel;
use Illuminate\Http\Request;

class PonctuelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ponctuels = Ponctuel::orderBy('id_ponctuel')->simplePaginate(10);
        return view('ponctuels.index', compact('ponctuels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$agents = Ponctuel::all();
        return view('ponctuels.create');//->with('agents', $agents);
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
            'date'=> 'required|date',
            'nom' => 'required|string',
            'prenom' => 'required|string',
            'ville' => 'required|string',
            'quartier' => 'required|string',
            'forfait' => 'required|string',
            'montant_ttc' => 'required|integer',
        ]);

        $request['adresse'] = array(
            'ville'=>$request->ville,
            'quartier'=>$request->quartier
        );
        $ponct = Ponctuel::all()->where('date', '=', $request->date)->where('nom', '=', $request->nom)->where('prenom', '=', $request->prenom)->where('forfait', '=', $request->forfait);

        if (count($ponct) != 0) {
            
        } else {
            Ponctuel::create($request->all());
        }

        return redirect()->route('ponctuels.index')->with('succes', 'Ponctuel créer avec succès !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ponctuel  $ponctuel
     * @return \Illuminate\Http\Response
     */
    public function show(Ponctuel $ponctuel)
    {
        return view('ponctuels.show')->with('ponctuel', $ponctuel);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ponctuel  $ponctuel
     * @return \Illuminate\Http\Response
     */
    public function edit(Ponctuel $ponctuel)
    {
        
        return view('ponctuels.edit')->with('ponctuel', $ponctuel);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ponctuel  $ponctuel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ponctuel $ponctuel)
    {
        $request->validate([
            'date'=> 'required|date',
            'nom' => 'required|string',
            'prenom' => 'required|string',
            'ville' => 'required|string',
            'quartier' => 'required|string',
            'forfait' => 'required|string',
            'montant_ttc' => 'required|integer',
        ]);

        $request['adresse'] = array(
            'ville'=>$request->ville,
            'quartier'=>$request->quartier
        );

        $ponctuel->save();
        return redirect()->route('ponctuels.index')->with('succes', 'Ponctuel modifié !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ponctuel  $ponctuel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ponctuel $ponctuel)
    {
        $ponctuel->delete();
        return redirect()->route('ponctuels.index');
    }
}
