<?php

namespace App\Http\Controllers;

use App\Models\AppelOffre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

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
        return view('appelOffres.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
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
