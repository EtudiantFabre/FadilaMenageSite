<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\PersonneAprevenir;
use Illuminate\Http\Request;
use App\Models\Candidat;

class PersonneAprevenirController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory
     */
    public function index()
    {
        $persAprev = PersonneAprevenir::orderBy('id_personne_aprevenir')->simplePaginate(10);
        return view('personneAprevenirs.index', compact('persAprev'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory
     */
    public function create()
    {

        $last_row = DB::table('candidats')->latest()->get();
        if (count($last_row) == 0) {
            $last = 0;
            return view('personneAprevenirs.create',compact('last'));
        } else {

        $last = $last_row[0];

        return view('personneAprevenirs.create',compact('last'));

        //$persAprev = PersonneAprevenir::all();
        //$candidats = Candidat::all();
        //return view('personneAprevenirs.create')->with('persAprev', $persAprev)->with('candidats', $candidats);
    }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\View\Factory
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string',
            'prenom' => 'required|string',
            //'id_candidat' => 'required',
            'quartier' => 'required|string',
            'lien_de_parente' => 'required|string',
            'tel' => 'required|string'

        ]);

        PersonneAprevenir::create($request->all());

       /* $persAprev = PersonneAprevenir::all()->where('id_candidat', '=', $request->id_candidat)->where('prenom', '=', $request->prenom)->where('nom', '=', $request->nom);

        if (count($persAprev) != 0) {

        } else {
            //dd($request);
            PersonneAprevenir::create($request->all());
        }*/

        return redirect('/')->with('flash_message', 'Votre candidature est enregisrer ave succès!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PersonneAprevenir  $personneAprevenir
     * @return \Illuminate\Contracts\View\Factory
     */
    public function show(PersonneAprevenir $personneAprevenir)
    {
        return view('personneAprevenirs.show')->with('persAprev', $personneAprevenir);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PersonneAprevenir  $personneAprevenir
     * @return \Illuminate\Contracts\View\Factory
     */
    public function edit(PersonneAprevenir $personneAprevenir)
    {
        $candidats = Candidat::all();
        return view('personneAprevenirs.edit')->with('persAprev', $personneAprevenir)->with('candidats', $candidats);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PersonneAprevenir  $personneAprevenir
     * @return \Illuminate\Contracts\View\Factory
     */
    public function update(Request $request, PersonneAprevenir $personneAprevenir)
    {
        $request->validate([
            'nom' => 'required|string',
            'prenom' => 'required|string',
            'lien_de_parente' => 'required|string',
            'id_candidat' => 'required|integer',
        ]);

        $personneAprevenir->nom = $request->nom;
        $personneAprevenir->prenom = $request->prenom;
        $personneAprevenir->lien_de_parente = $request->lien_de_parente;
        $personneAprevenir->id_candidat = $request->id_candidat;

        return redirect()->route('personneAprevenirs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PersonneAprevenir  $personneAprevenir
     * @return \Illuminate\Contracts\View\Factory
     */
    public function destroy(PersonneAprevenir $personneAprevenir)
    {
        $personneAprevenir->delete();
        return redirect()->route('personneAprevenirs.index')->with('info', 'Personne à prevenir modifié avec succès !!!');
    }
}
