<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


//  Route ajouter par moi : 

//  Agents
Route::resource('agents', \App\Models\Agent::class);

//  AgentPonctuel
Route::get('/liste-agent-ponctuel', [\App\Models\AgentPonctuel::class, 'index'])->name('liste_agent_ponctuel');
Route::post('/enregistrement-agent-ponctuel', [\App\Models\AgentPonctuel::class, 'store'])->name('enregistrement_agent_ponctuel');
Route::get('/creation-agent-ponctuel', [\App\Models\AgentPonctuel::class, 'create'])->name('creation_agent_ponctuel');
Route::get('/afficher-agent-ponctuel/{agent_ponctuel}', [\App\Models\AgentPonctuel::class, 'show'])->name('afficher_agent_ponctuel');
Route::post('/mettre-a-jour-agent-ponctuel/{agent_ponctuel}', [\App\Models\AgentPonctuel::class, 'update'])->name('mettre_a_jour_agent_ponctuel');
Route::post('/suppression-agent-ponctuel/{agent_ponctuel}', [\App\Models\AgentPonctuel::class, 'destroy'])->name('suppression_agent_ponctuel');
Route::get('/{agent_ponctuel}/mise-a-jour', [\App\Models\AgentPonctuel::class, 'edit'])->name('mise_a_jour');

//                              //


//  AppelOffre
/*
Route::get('/liste-agent-ponctuel', [\App\Models\AppelOffre::class, 'index'])->name('liste_agent_ponctuel');
Route::post('/enregistrement-agent-ponctuel', [\App\Models\AppelOffre::class, 'store'])->name('enregistrement_agent_ponctuel');
Route::get('/creation-agent-ponctuel', [\App\Models\AppelOffre::class, 'create'])->name('creation_agent_ponctuel');
Route::get('/afficher-agent-ponctuel/{agent_ponctuel}', [\App\Models\AppelOffre::class, 'show'])->name('afficher_agent_ponctuel');
Route::post('/mettre-a-jour-agent-ponctuel/{agent_ponctuel}', [\App\Models\AppelOffre::class, 'update'])->name('mettre_a_jour_agent_ponctuel');
Route::post('/suppression-agent-ponctuel/{agent_ponctuel}', [\App\Models\AppelOffre::class, 'destroy'])->name('suppression_agent_ponctuel');
Route::get('/{agent_ponctuel}/mise-a-jour', [\App\Models\AppelOffre::class, 'edit'])->name('mise_a_jour');*/

//

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
