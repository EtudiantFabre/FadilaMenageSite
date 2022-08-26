<?php

namespace App\Http\Controllers;

use App\Models\Evaluation;
use Illuminate\Http\Request;
use App\Models\Agent;

class EvaluationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $evaluations = Evaluation::orderBy('id_evaluation')->simplePaginate(10);
        return view('evaluations.index', compact('evaluations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $agents = Agent::all();
        return view('evaluations.create')->with('agents', $agents);
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
            'periodicite' => 'required|string',
            'debut_periode' => 'required|string',
            'fin_periode' => 'required|date',
            'note_sur_vingt' => 'required|integer',
            'sugestion' => 'required',
            'commentaire' => 'required',
            'id_agent' => 'required'
        ]);

        $evaluation = Evaluation::all()->where('id_agent', '=', $request->id_agent)->where('debut_periode', '=', $request->debut_periode)->where('fin_periode', '=', $request->fin_periode);
        if (count($evaluation) !=0) {
            
        } else {
            Evaluation::create($request->all());
        }
        return redirect()->route('evaluations.index')->with('succes', 'Suivi créer avec succès !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Evaluation  $evaluation
     * @return \Illuminate\Http\Response
     */
    public function show(Evaluation $evaluation)
    {
        return view('evaluations.show')->with('evaluation', $evaluation);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Evaluation  $evaluation
     * @return \Illuminate\Http\Response
     */
    public function edit(Evaluation $evaluation)
    {
        $agents = Agent::all();
        return view('evaluations.edit')->with('evaluation', $evaluation)->with('agents', $agents);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Evaluation  $evaluation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Evaluation $evaluation)
    {
        $request->validate([
            'periodicite' => 'required|string',
            'debut_periode' => 'required|string',
            'fin_periode' => 'required|date',
            'note_sur_vingt' => 'required|integer',
            'sugestion' => 'required',
            'commentaire' => 'required',
            'id_agent' => 'required'
        ]);

        $evaluation->periodicite = $request->periodicite;
        $evaluation->debut_periode = $request->debut_periode;
        $evaluation->fin_periode = $request->fin_periode;
        $evaluation->note_sur_vingt = $request->note_sur_vingt;
        $evaluation->sugestion = $request->sugestion;
        $evaluation->commentaire = $request->commentaire;
        $evaluation->id_agent = $request->id_agent;
        $evaluation->save();
        return redirect()->route('evaluations.index')->with('succes', 'Evaluation modifié !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Evaluation  $evaluation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Evaluation $evaluation)
    {
        $evaluation->delete();
        return redirect()->route('evaluations.index')->with('info', 'Evaluation modifié avec succès !!!');
    }
}
