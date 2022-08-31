<?php

namespace App\Http\Controllers;

use App\Models\Societe;
use Illuminate\Http\Request;

class SocieteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $societes = Societe::orderBy('id_societe')->simplePaginate(10);
        return view('societes.index', compact('societes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('societes.create');
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
            'sigle' => 'required',
            'description' => 'required|text',
            'date_offre' => 'required|date',
            'domaine' => 'required',
        ]);

        $societe = Societe::all()->where('sigle', '=', $request->sigle)->where('description', '=', $request->description);    
        if (count($societe) != 0) {
            
        } else {
            Societe::create($request->all());
        }
        return redirect()->route('societes.index')->with('succes', 'Suivi créer avec succès !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Societe  $societe
     * @return \Illuminate\Http\Response
     */
    public function show(Societe $societe)
    {
        
        return view('societes.show')->with('societe', $societe);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Societe  $societe
     * @return \Illuminate\Http\Response
     */
    public function edit(Societe $societe)
    {

        return view('societes.edit')->with('societe', $societe);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Societe  $societe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Societe $societe)
    {
        $request->validate([
            'sigle' => 'required',
            'description' => 'required|text',
            'date_offre' => 'required|date',
            'domaine' => 'required',
        ]);
        
        $societe->sigle = $request->sigle;
        $societe->description = $request->description;
        $societe->date_offre = $request->date_offre;
        $societe->domaine = $request->domaine;

        $societe->save();
        return redirect()->route('societes.index')->with('succes', 'Societé modifié !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Societe  $societe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Societe $societe)
    {
        $societe->delete();
        return redirect()->route('societes.index')->with('info', 'Societé modifié avec succès !!!');
    }
}
