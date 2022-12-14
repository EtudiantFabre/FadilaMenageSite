<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use Illuminate\Http\Request;
use App\Models\Agent;
use Illuminate\Support\Facades\View;


class AgentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agents = Agent::all();
<<<<<<< HEAD
        return view('agents.index',compact('agents'));
=======
        //echo 'Rien de bon';
        return view('agents.index', compact('agents'));
>>>>>>> main
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
<<<<<<< HEAD
        return view('agents.edit');
=======
        return view('agents.create');
>>>>>>> main
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
<<<<<<< HEAD
        $request->validate([

            //'nom' => 'required',
            //'prenom' => 'required',
            //'date_offre' => 'required',
            //'domaine'    => 'required'
        ]);


        $agents = new  Agent;
        $agents->id_agent = $request->id_agent;
        $agents->nom= $request->nom;
        $agents->prenom = $request->prenom;
        $agents->date_naissance = $request->date_naissance;
        $agents->lieu_naissance= $request->lieu_naissance;
        $agents->genre= $request->genre;
        $agents->email= $request->email;
        $agents->situation_familiale = $request->situation_familiale;
        $agents->nationalite = $request->nationalite;
        $agents->enfants_encharge = $request->enfants_encharge;
        $agents->profession = $request->profession;
        $agents->status = $request->status;
        $agents->avatar = $request->avatar;
        $agents->date_retenu = $request->date_retenu;
        $agents->nationalite = $request->nationalite;
        $agents->photo_id = $request->avatar;
        $agents->numero_de_piece = $request->numero_de_piece;
        $agents-> date_expiration = $request-> date_expiration;
        $agents->date_delivrer = $request->date_delivrer;
        $agents->ville_residence = $request->ville_residence;
        $agents->quartier = $request->quartier;
        $agents->rue = $request->rue;
        $agents->telephone = $request->telephone;
        $agents->save();
        return redirect()->route('agents.store');
=======
        
        return redirect()->route('agents.index');
>>>>>>> main
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Agent  $agent
     * @return \Illuminate\Http\Response
     */
    public function show(Agent $agent)
    {
<<<<<<< HEAD
        return view('agents.show', compact("agent"));

=======

        return view('agents.show');
>>>>>>> main
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Agent  $agent
     * @return \Illuminate\Http\Response
     */
    public function edit(Agent $agent)
    {
<<<<<<< HEAD
        return view("agents.edit", compact("agent"));
=======
        if (View::exists('agents.edit')){
            return view('agents.edit', compact('agent'));
        }
>>>>>>> main
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Agent  $agent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Agent $agent)
    {
<<<<<<< HEAD
         // 1. La validation

    // Les r??gles de validation pour "title" et "content"
   // $rules = [
    //    'title' => 'bail|required|string|max:255',
    //    "content" => 'bail|required',
   // ];

    // Si une nouvelle image est envoy??e
    if ($request->has("photo_id")) {
        // On ajoute la r??gle de validation pour "picture"
        $rules["photo_id"] = 'bail|required|image|max:1024';
=======
        

        return redirect()->route('agents.index');
>>>>>>> main
    }

    //$this->validate($request, $rules);

    // 2. On upload l'image dans "/storage/app/public/posts"
    if ($request->has("photo_id")) {

        //On supprime l'ancienne image
        Storage::delete($agent->photo_id);

        $chemin_image = $request->photo_id->store("agents");
    }

    // 3. On met ?? jour les informations du Post
    $agent->update([
        "nom" => $request -> nom,
        "prenom" => $request->prenom,
        "date_naissance" => $request->date_naissance,
        "lieu_naissance"=> $request->lieu_naissance,
        "genre"=> $request->genre,
        "email"=>$request->email,
        "situation_familiale" => $request->situation_familiale,
        "nationalite" => $request->nationalite,
        "enfants_encharge" => $request->enfants_encharge,
        "profession" => $request->profession,
        "status" => $request->status,
        "avatar" => $request->avatar,
        "date_retenu" => $request->date_retenu,
        "nationalite" => $request->nationalite,
        "photo_id" => $request->photo_id,
        "numero_de_piece" => $request->numero_de_piece,
         "date_expiration" => $request-> date_expiration,
        "date_delivrer" => $request->date_delivrer,
        "ville_residence" => $request->ville_residence,
        "quartier" =>$request->quartier,
        "rue" =>$request->rue,
        "telephone" => $request->telephone,
        "photo_id" => isset($chemin_image) ? $chemin_image : $agent->photo_id
    ]);

    // 4. On affiche le Post modifi?? : route("posts.show")
    return redirect(route("agents.show", $agent));
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Agent  $agent
     * @return \Illuminate\Http\Response
     */
    public function destroy(Agent $agent)
    {
<<<<<<< HEAD

    $agent->delete();

    // Redirection route "posts.index"
    return redirect(route('agents.index'));
=======
        
        $agent->delete();
        return redirect()->route('agents.index');
>>>>>>> main
    }

}
