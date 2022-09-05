<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory
     */
    public function index()
    {
        $clients = Client::all();

        //dd($clients);
        return view('clients.index',compact('clients'));
      }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory
     */
    public function create()
    {
        return view("clients.edit");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\View\Factory
     */
    public function store(Request $request)
    {
         // 1. La validation
       // $this->validate($request, [

       // ]);

      

   Client::create($request->all());
    // 3. On retourne vers tous les clients :
    return redirect(route("clients.index"));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Contracts\View\Factory
     */
    public function show(Client $client)
    {
        return view("clients.show", compact("client"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Contracts\View\Factory
     */
    public function edit(Client $client)
    {
        return view("clients.edit", compact("client"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Contracts\View\Factory
     */
    public function update(Request $request, Client $client)
    {
        $client->update([
            "nom" => $request->nom,
            "tel" => $request->tel,
            "ville" => $request->tel,
            "quartier" => $request->quartier,
            "email" => $request->email,
            "type_service_rechercher" => $request->type_service_rechercher,
            "frequence_souhaiter" => $request->frequence_souhaiter,

        ]);


        // 4. On affiche le client modifié :
    return redirect(route("clients.index", $client));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Contracts\View\Factory
     */
    public function destroy(Client $client)
    {
        $client->delete();
        return redirect(route('clients.index'))->with('flash_message', 'client supprimé!');

    }
}
