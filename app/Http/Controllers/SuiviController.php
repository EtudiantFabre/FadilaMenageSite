<?php

namespace App\Http\Controllers;

use App\Models\Suivi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Models\Personnel;
use App\Models\Agent;

class SuiviController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $suivis = Suivi::latest()->paginate(25);
        //echo 'Rien de bon';
        return view('suivis.index', compact('suivis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $personnels = Personnel::all()->where('post_ocuper', '=', 'SUIVI');
        $agents = Agent::all();
        return view('suivis.create')->with('personnels', $personnels)->with('agents', $agents);
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
            'date_passage' => 'required|date',
            'heure_passage' => 'required',
            'acces_residence' => 'required',
            'verif_presence_agent' => 'required',
            'presence_agent' => 'required',
            'heure_arrive_agent' => 'required',
            'pres_corporel_vestimentaire' => 'required',
            'entretient_plafond' => 'required',
            'essuyage_vitre' => 'required',
            'depousierage_appareil' => 'required',
            'depousierage_meuble' => 'required',
            'entretient_corbeil' => 'required',
            'entretient_sanitaire' => 'required',
            'balayage_netoyage_sol' => 'required',
            'repassage' => 'required',
            'id_personnel' => 'required',
            'id_agent' => 'required',
            'autres_traveaux' => 'nullable'
        ]);
        $suivrePersonne = Suivi::all()->where('date_passage' , '=', $request->date_passage)->where('id_personnel', '=', $request->id_personnel)->where('id_agent', '=', $request->id_agent);
        if (count($suivrePersonne) != 0) {

            echo "
            <div class='alert alert-danger alert-dismissible fade show' role='alert'>
                <strong>Alerte !!!</strong> Il paraît que vous avez déjà créer un suivi pour ce agent à la même date et heure.
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>";
            return redirect()->route('suivis.index')->with('error', 'Suivi déjà existant !');
        } else {
            Suivi::create($request->all());
            return redirect()->route('suivis.index')->with('succes', 'Suivi créer avec succès !');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Suivi  $suivi
     * @return \Illuminate\Http\Response
     */
    public function show(Suivi $suivi)
    {
        
        return view('suivis.show')->with('suivi', $suivi);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Suivi  $suivi
     * @return \Illuminate\Http\Response
     */
    public function edit(Suivi $suivi)
    {
        if (View::exists('suivis.edit')){
            $personnels = Personnel::all()->where('post_ocuper', '=', 'SUIVI');
            $agents = Agent::all();
            /*$pers = Personnel::all()->where('id_personnel', '=', $suivi->id_Personnel);
            $agt = Agent::all()->where('id_agent', '=', $suivi->id_agent);*/
            return view('suivis.edit')->with('suivi', $suivi)->with('personnels', $personnels)->with('agents', $agents);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Suivi  $suivi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Suivi $suivi)
    {
        $request->validate([
            'date_passage' => 'required|date',
            'heure_passage' => 'required',
            'acces_residence' => 'required',
            'verif_presence_agent' => 'required',
            'presence_agent' => 'required',
            'heure_arrive_agent' => 'required',
            'pres_corporel_vestimentaire' => 'required',
            'entretient_plafond' => 'required',
            'essuyage_vitre' => 'required',
            'depousierage_appareil' => 'required',
            'depousierage_meuble' => 'required',
            'entretient_corbeil' => 'required',
            'entretient_sanitaire' => 'required',
            'balayage_netoyage_sol' => 'required',
            'repassage' => 'required',
            'id_personnel' => 'required',
            'id_agent' => 'required',
            'autres_traveaux' => 'nullable'
        ]);

        $suivi->date_passage = $request->date_passage;
        $suivi->heure_passage = $request->heure_passage;
        $suivi->acces_residence = $request->acces_residence;
        $suivi->verif_presence_agent = $request->verif_presence_agent;
        $suivi->presence_agent = $request->presence_agent;
        $suivi->heure_arrive_agent = $request->heure_arrive_agent;
        $suivi->pres_corporel_vestimentaire = $request->pres_corporel_vestimentaire;
        $suivi->entretient_plafond = $request->entretient_plafond;
        $suivi->essuyage_vitre = $request->essuyage_vitre;
        $suivi->depousierage_appareil = $request->depousierage_appareil;
        $suivi->depousierage_meuble = $request->depousierage_meuble;
        $suivi->entretient_corbeil = $request->entretient_corbeil;
        $suivi->entretient_sanitaire = $request->entretient_sanitaire;
        $suivi->balayage_netoyage_sol = $request->balayage_netoyage_sol;
        $suivi->repassage = $request->repassage;
        $suivi->id_personnel = $request->id_personnel;
        $suivi->id_agent = $request->id_agent;
        $suivi->autres_traveaux = $request->autres_traveaux;

        $suivi->save();
        return redirect()->route('suivis.index')->with('succes', 'Suivi modifié !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Suivi  $suivi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Suivi $suivi)
    {
        
        $suivi->delete();
        return redirect()->route('suivis.index')->with('info', 'Suivi supprimé avec succès !');
    }
}
