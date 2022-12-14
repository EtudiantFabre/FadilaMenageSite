<?php

namespace App\Http\Controllers;

use App\Models\Facture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class FactureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $factures = Facture::all();
        return view('factures.index', compact('factures'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('factures.create');
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
            'remuneration_brut' => 'required|integer',
            'remuneration_net' => 'required|integer',
            'conciliation_social' => 'required|integer',
            'provision_sociales' => 'required|integer',
            'cotisation_provisoir_conges' => 'required|integer',
            'total_debour' => 'required|integer',
            'frais' => 'required|integer',
            'tva' => 'required|integer',
            'total_ttc' => 'required|integer'
        ]);
        Facture::create($request->all());

        return redirect()->route('factures.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Facture  $facture
     * @return \Illuminate\Http\Response
     */
    public function show(Facture $facture)
    {
        
        return view('factures.show')->with('facture', $facture);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Facture  $facture
     * @return \Illuminate\Http\Response
     */
    public function edit(Facture $facture)
    {
        if (View::exists('factures.edit')) {
            return view('factures.edit', compact('facture'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Facture  $facture
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Facture $facture)
    {
        $request->validate([
            'remuneration_brut' => 'required|integer',
            'remuneration_net' => 'required|integer',
            'conciliation_social' => 'required|integer',
            'provision_sociales' => 'required|integer',
            'cotisation_provisoir_conges' => 'required|integer',
            'total_debour' => 'required|integer',
            'frais' => 'required|integer',
            'tva' => 'required|integer',
            'total_ttc' => 'required|integer'
        ]);

        $facture->remuneration_brut = $request->remuneration_brut;
        $facture->remuneration_net = $request->remuneration_net;
        $facture->conciliation_social = $request->conciliation_social;
        $facture->provision_sociales = $request->provision_sociales;
        $facture->cotisation_provisoir_conges = $request->cotisation_provisoir_conges;
        $facture->total_debour = $request->total_debour;
        $facture->frais = $request->frais;
        $facture->tva = $request->tva;
        $facture->total_ttc = $request->total_ttc;

        $facture->save();
        return redirect()->route('factures.index')->with('succes', 'Facture modifi?? !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Facture  $facture
     * @return \Illuminate\Http\Response
     */
    public function destroy(Facture $facture)
    {
        $facture->delete();
        return redirect()->route('factures.index');
    }
}
