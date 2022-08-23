<?php

namespace App\Http\Controllers;

use App\Models\Prospection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class ProspectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prospections = Prospection::all();
        //echo 'Rien de bon';
        return view('prospections.index', compact('prospections'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('prospections.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        

        return redirect()->route('prospections.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Prospection  $prospection
     * @return \Illuminate\Http\Response
     */
    public function show(Prospection $prospection)
    {
        
        return view('prospections.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Prospection  $prospection
     * @return \Illuminate\Http\Response
     */
    public function edit(Prospection $prospection)
    {
        if (View::exists('prospections.edit')){
            return view('prospections.edit', compact('prospection'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Prospection  $prospection
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Prospection $prospection)
    {
        
        return redirect()->route('prospections.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Prospection  $prospection
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prospection $prospection)
    {
        
        $prospection->delete();
        return redirect()->route('prospections.index');
    }
}
