<?php

namespace App\Http\Controllers;

use App\Models\AgentPonctuel;
use Illuminate\Http\Request;
use App\Models\Agent;
use App\Models\Ponctuel;
use Illuminate\Support\Facades\View;

class AgentPonctuelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory
     */
    public function index()
    {
        $agent_ponctuels = AgentPonctuel::orderBy('id_agent_ponctuel')->simplePaginate(10);
        //dd($agent_ponctuels);
        return view('agentPonctuels.index', compact('agent_ponctuels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory
     */
    public function create()
    {
        $agents = Agent::all();
        $ponc = Ponctuel::all();
        return view('agentPonctuels.create')->with('agents', $agents)->with('ponctuels', $ponc);
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
            'id_agent' => 'required',
            'id_ponctuel' => 'required|integer'
        ]);

        foreach ($request['id_agent'] as $agent) {
            //dd($request);
            AgentPonctuel::create([
                'id_agent' => (int)$agent,
                'id_ponctuel' => (int)$request['id_ponctuel']
            ]);
        }
        return redirect()->route('agentPonctuels.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AgentPonctuel  $agentPonctuel
     * @return \Illuminate\Contracts\View\Factory
     */
    public function show(AgentPonctuel $agentPonctuel)
    {
        
        return view('agentPonctuels.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AgentPonctuel  $agentPonctuel
     * @return \Illuminate\Contracts\View\Factory
     */
    public function edit(AgentPonctuel $agentPonctuel)
    {
        
        if (View::exists('agents.edit')){
            return view('agentPonctuels.edit', compact('agentPonctuel'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AgentPonctuel  $agentPonctuel
     * @return \Illuminate\Contracts\View\Factory
     */
    public function update(Request $request, AgentPonctuel $agentPonctuel)
    {
        
        return redirect()->route('agentPonctuels.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AgentPonctuel  $agentPonctuel
     * @return \Illuminate\Contracts\View\Factory
     */
    public function destroy(AgentPonctuel $agentPonctuel)
    {
        
        $agentPonctuel->delete();
        return redirect()->route('agentPonctuels.index');
    }
}
