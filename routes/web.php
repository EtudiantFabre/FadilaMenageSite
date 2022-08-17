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
Route::get('/liste-agent-ponctuels', [\App\Models\AgentPonctuel::class, 'index'])->name('liste_agent_ponctuels');
Route::post('/enregistrement-agent-ponctuel', [\App\Models\AgentPonctuel::class, 'store'])->name('enregistrement_agent_ponctuel');
Route::get('/creation-agent-ponctuel', [\App\Models\AgentPonctuel::class, 'create'])->name('creation_agent_ponctuel');
Route::get('/afficher-agent-ponctuel/{agent_ponctuel}', [\App\Models\AgentPonctuel::class, 'show'])->name('afficher_agent_ponctuel');
Route::post('/mettre-a-jour-agent-ponctuel/{agent_ponctuel}', [\App\Models\AgentPonctuel::class, 'update'])->name('mettre_a_jour_agent_ponctuel');
Route::post('/suppression-agent-ponctuel/{agent_ponctuel}', [\App\Models\AgentPonctuel::class, 'destroy'])->name('suppression_agent_ponctuel');
Route::get('/{agent_ponctuel}/mise-a-jour', [\App\Models\AgentPonctuel::class, 'edit'])->name('mise_a_jour');

//                              //


//  AppelOffre

Route::get('/liste-appel-offres', [\App\Models\AppelOffre::class, 'index'])->name('liste_appel_offres');
Route::post('/sauvegarde-appel-offre', [\App\Models\AppelOffre::class, 'store'])->name('sauvegarde_appel_offre');
Route::get('/creation-appel-offre', [\App\Models\AppelOffre::class, 'create'])->name('creation_appel_offre');
Route::get('/afficher-appel-offre/{appel_offre}', [\App\Models\AppelOffre::class, 'show'])->name('afficher_appel_offre');
Route::post('/mettre-a-jour-appel-offre/{appel_offre}', [\App\Models\AppelOffre::class, 'update'])->name('mettre_a_jour_appel_offre');
Route::post('/suppression-agent-ponctuel/{appel_offre}', [\App\Models\AppelOffre::class, 'destroy'])->name('suppression_appel_offre');
Route::get('/{appel_offre}/mise-a-jour', [\App\Models\AppelOffre::class, 'edit'])->name('mise_a_jour');

//

//  Candidat

Route::get('/liste-candidats', [\App\Models\Candidat::class, 'index'])->name('liste_candidats');
Route::post('/sauvegarde-candidat', [\App\Models\Candidat::class, 'store'])->name('sauvegarde_candidat');
Route::get('/creation-candidat', [\App\Models\Candidat::class, 'create'])->name('creation_candidat');
Route::get('/afficher-candidat/{candidat}', [\App\Models\Candidat::class, 'show'])->name('afficher_candidat');
Route::post('/mettre-a-jour-candidat/{candidat}', [\App\Models\Candidat::class, 'update'])->name('mettre_a_jour_candidat');
Route::post('/suppression-candidat/{candidat}', [\App\Models\Candidat::class, 'destroy'])->name('suppression_candidat');
Route::get('/{candidat}/mise-a-jour', [\App\Models\Candidat::class, 'edit'])->name('mise_a_jour');

//                              //

//  Client

Route::get('/liste-clients', [\App\Models\Client::class, 'index'])->name('liste_clients');
Route::post('/sauvegarde-client', [\App\Models\Client::class, 'store'])->name('sauvegarde_client');
Route::get('/creation-client', [\App\Models\Client::class, 'create'])->name('creation_client');
Route::get('/afficher-client/{client}', [\App\Models\Client::class, 'show'])->name('afficher_client');
Route::post('/mettre-a-jour-client/{client}', [\App\Models\Client::class, 'update'])->name('mettre_a_jour_client');
Route::post('/suppression-client/{client}', [\App\Models\Client::class, 'destroy'])->name('suppression_client');
Route::get('/{client}/mise-a-jour', [\App\Models\Client::class, 'edit'])->name('mise_a_jour');

//                              //


//  Contrat

Route::get('/liste-contrats', [\App\Models\Contrat::class, 'index'])->name('liste_contrats');
Route::post('/sauvegarde-contrat', [\App\Models\Contrat::class, 'store'])->name('sauvegarde_contrat');
Route::get('/creation-contrat', [\App\Models\Contrat::class, 'create'])->name('creation_contrat');
Route::get('/afficher-contrat/{contrat}', [\App\Models\Contrat::class, 'show'])->name('afficher_contrat');
Route::post('/mettre-a-jour-contrat/{contrat}', [\App\Models\Contrat::class, 'update'])->name('mettre_a_jour_contrat');
Route::post('/suppression-contrat/{contrat}', [\App\Models\Contrat::class, 'destroy'])->name('suppression_contrat');
Route::get('/{contrat}/mise-a-jour', [\App\Models\Contrat::class, 'edit'])->name('mise_a_jour');

//                              //


//  Evaluation

Route::get('/liste-evaluations', [\App\Models\Evaluation::class, 'index'])->name('liste_evaluations');
Route::post('/sauvegarde-evaluation', [\App\Models\Evaluation::class, 'store'])->name('sauvegarde_evaluation');
Route::get('/creation-evaluation', [\App\Models\Evaluation::class, 'create'])->name('creation_evaluation');
Route::get('/afficher-evaluation/{evaluation}', [\App\Models\Evaluation::class, 'show'])->name('afficher_evaluation');
Route::post('/mettre-a-jour-evaluation/{evaluation}', [\App\Models\Evaluation::class, 'update'])->name('mettre_a_jour_evaluation');
Route::post('/suppression-evaluation/{evaluation}', [\App\Models\Evaluation::class, 'destroy'])->name('suppression_evaluation');
Route::get('/{evaluation}/mise-a-jour', [\App\Models\Evaluation::class, 'edit'])->name('mise_a_jour');

//                              //


//  ExperienceDuCandidat

Route::get('/liste-experience-candidats', [\App\Models\ExperienceDuCandidat::class, 'index'])->name('liste_experience_candidats');
Route::post('/sauvegarde-experience-candidat', [\App\Models\ExperienceDuCandidat::class, 'store'])->name('sauvegarde_experience_candidat');
Route::get('/creation-experience-candidat', [\App\Models\ExperienceDuCandidat::class, 'create'])->name('creation_experience_candidat');
Route::get('/afficher-experience-candidat/{experience_candidat}', [\App\Models\ExperienceDuCandidat::class, 'show'])->name('afficher_experience_candidat');
Route::post('/mettre-a-jour-experience-candidat/{experience_candidat}', [\App\Models\ExperienceDuCandidat::class, 'update'])->name('mettre_a_jour_experience_candidat');
Route::post('/suppression-experience-candidat/{experience_candidat}', [\App\Models\ExperienceDuCandidat::class, 'destroy'])->name('suppression_experience_candidat');
Route::get('/{experience_candidat}/mise-a-jour', [\App\Models\ExperienceDuCandidat::class, 'edit'])->name('mise_a_jour');

//                              //


//  Facture

Route::get('/liste-factures', [\App\Models\Facture::class, 'index'])->name('liste_factures');
Route::post('/sauvegarde-facture', [\App\Models\Facture::class, 'store'])->name('sauvegarde_facture');
Route::get('/creation-facture', [\App\Models\Facture::class, 'create'])->name('creation_facture');
Route::get('/afficher-facture/{facture}', [\App\Models\Facture::class, 'show'])->name('afficher_facture');
Route::post('/mettre-a-jour-facture/{facture}', [\App\Models\Facture::class, 'update'])->name('mettre_a_jour_facture');
Route::post('/suppression-facture/{facture}', [\App\Models\Facture::class, 'destroy'])->name('suppression_facture');
Route::get('/{facture}/mise-a-jour', [\App\Models\Facture::class, 'edit'])->name('mise_a_jour');

//                              //


//  Personne

Route::get('/liste-personnes', [\App\Models\Personne::class, 'index'])->name('liste_personnes');
Route::post('/sauvegarde-personne', [\App\Models\Personne::class, 'store'])->name('sauvegarde_personne');
Route::get('/creation-personne', [\App\Models\Personne::class, 'create'])->name('creation_personne');
Route::get('/afficher-personne/{personne}', [\App\Models\Personne::class, 'show'])->name('afficher_personne');
Route::post('/mettre-a-jour-personne/{personne}', [\App\Models\Personne::class, 'update'])->name('mettre_a_jour_personne');
Route::post('/suppression-personne/{personne}', [\App\Models\Personne::class, 'destroy'])->name('suppression_personne');
Route::get('/{personne}/mise-a-jour', [\App\Models\Personne::class, 'edit'])->name('mise_a_jour');

//                              //


//  PersonneAprevenir

Route::get('/liste-personnes-a-prevenir', [\App\Models\PersonneAprevenir::class, 'index'])->name('liste_personnes_a_prevenir');
Route::post('/sauvegarde-personne-a-prevenir', [\App\Models\PersonneAprevenir::class, 'store'])->name('sauvegarde_personne_a_prevenir');
Route::get('/creation-personne-a-prevenir', [\App\Models\PersonneAprevenir::class, 'create'])->name('creation_personne_a_prevenir');
Route::get('/afficher-personne-a-prevenir/{personne}', [\App\Models\PersonneAprevenir::class, 'show'])->name('afficher_personne_a_prevenir');
Route::post('/mettre-a-jour-personne-a-prevenir/{personne}', [\App\Models\PersonneAprevenir::class, 'update'])->name('mettre_a_jour_personne_a_prevenir');
Route::post('/suppression-personne-a-prevenir/{personne}', [\App\Models\PersonneAprevenir::class, 'destroy'])->name('suppression_personne_a_prevenir');
Route::get('/{personne}/mise-a-jour', [\App\Models\PersonneAprevenir::class, 'edit'])->name('mise_a_jour');

//                              //


//  Personnel

Route::get('/liste-personnels', [\App\Models\Personnel::class, 'index'])->name('liste_personnels');
Route::post('/sauvegarde-personnel', [\App\Models\Personnel::class, 'store'])->name('sauvegarde_personnel');
Route::get('/creation-personnel', [\App\Models\Personnel::class, 'create'])->name('creation_personnel');
Route::get('/afficher-personnel/{personnel}', [\App\Models\Personnel::class, 'show'])->name('afficher_personnel');
Route::post('/mettre-a-jour-personnel/{personnel}', [\App\Models\Personnel::class, 'update'])->name('mettre_a_jour_personnel');
Route::post('/suppression-personnel/{personnel}', [\App\Models\Personnel::class, 'destroy'])->name('suppression_personnel');
Route::get('/{personnel}/mise-a-jour', [\App\Models\Personnel::class, 'edit'])->name('mise_a_jour');

//                              //


//  Ponctuel

Route::get('/liste-ponctuels', [\App\Models\Ponctuel::class, 'index'])->name('liste_ponctuels');
Route::post('/sauvegarde-ponctuel', [\App\Models\Ponctuel::class, 'store'])->name('sauvegarde_ponctuel');
Route::get('/creation-ponctuel', [\App\Models\Ponctuel::class, 'create'])->name('creation_ponctuel');
Route::get('/afficher-ponctuel/{personnel}', [\App\Models\Ponctuel::class, 'show'])->name('afficher_ponctuel');
Route::post('/mettre-a-jour-ponctuel/{personnel}', [\App\Models\Ponctuel::class, 'update'])->name('mettre_a_jour_ponctuel');
Route::post('/suppression-ponctuel/{personnel}', [\App\Models\Ponctuel::class, 'destroy'])->name('suppression_ponctuel');
Route::get('/{ponctuel}/mise-a-jour', [\App\Models\Ponctuel::class, 'edit'])->name('mise_a_jour');

//                              //


//  Prospection

Route::get('/liste-prospections', [\App\Models\Prospection::class, 'index'])->name('liste_prospections');
Route::post('/sauvegarde-prospection', [\App\Models\Prospection::class, 'store'])->name('sauvegarde_prospection');
Route::get('/creation-prospection', [\App\Models\Prospection::class, 'create'])->name('creation_prospection');
Route::get('/afficher-prospection/{prospection}', [\App\Models\Prospection::class, 'show'])->name('afficher_prospection');
Route::post('/mettre-a-jour-prospection/{prospection}', [\App\Models\Prospection::class, 'update'])->name('mettre_a_jour_prospection');
Route::post('/suppression-prospection/{prospection}', [\App\Models\Prospection::class, 'destroy'])->name('suppression_prospection');
Route::get('/{prospection}/mise-a-jour', [\App\Models\Prospection::class, 'edit'])->name('mise_a_jour');

//                              //


//  RelanceContrat

Route::get('/liste-relance-conts', [\App\Models\RelanceContrat::class, 'index'])->name('liste_relance_conts');
Route::post('/sauvegarde-relance-cont', [\App\Models\RelanceContrat::class, 'store'])->name('sauvegarde_relance_cont');
Route::get('/creation-relance-cont', [\App\Models\RelanceContrat::class, 'create'])->name('creation_relance_cont');
Route::get('/afficher-relance-cont/{relance_contrat}', [\App\Models\RelanceContrat::class, 'show'])->name('afficher_relance_cont');
Route::post('/mettre-a-jour-relance-cont/{relance_contrat}', [\App\Models\RelanceContrat::class, 'update'])->name('mettre_a_jour_relance_cont');
Route::post('/suppression-relance-cont/{relance_contrat}', [\App\Models\RelanceContrat::class, 'destroy'])->name('suppression_relance_cont');
Route::get('/{relance_contrat}/mise-a-jour', [\App\Models\RelanceContrat::class, 'edit'])->name('mise_a_jour');

//                              //


//  Societe

Route::get('/liste-societes', [\App\Models\Societe::class, 'index'])->name('liste_societes');
Route::post('/sauvegarde-societe', [\App\Models\Societe::class, 'store'])->name('sauvegarde_societe');
Route::get('/creation-societe', [\App\Models\Societe::class, 'create'])->name('creation_societe');
Route::get('/afficher-societe/{societe}', [\App\Models\Societe::class, 'show'])->name('afficher_societe');
Route::post('/mettre-a-jour-societe/{societe}', [\App\Models\Societe::class, 'update'])->name('mettre_a_jour_societe');
Route::post('/suppression-societe/{societe}', [\App\Models\Societe::class, 'destroy'])->name('suppression_societe');
Route::get('/{societe}/mise-a-jour', [\App\Models\Societe::class, 'edit'])->name('mise_a_jour');

//                              //


//  Suivi

Route::get('/liste-suivis', [\App\Models\Suivi::class, 'index'])->name('liste_suivis');
Route::post('/sauvegarde-suivi', [\App\Models\Suivi::class, 'store'])->name('sauvegarde_suivi');
Route::get('/creation-suivi', [\App\Models\Suivi::class, 'create'])->name('creation_suivi');
Route::get('/afficher-suivi/{suivi}', [\App\Models\Suivi::class, 'show'])->name('afficher_suivi');
Route::post('/mettre-a-jour-suivi/{suivi}', [\App\Models\Suivi::class, 'update'])->name('mettre_a_jour_suivi');
Route::post('/suppression-suivi/{suivi}', [\App\Models\Suivi::class, 'destroy'])->name('suppression_suivi');
Route::get('/{suivi}/mise-a-jour', [\App\Models\Suivi::class, 'edit'])->name('mise_a_jour');

//                              //


//  Vente

Route::get('/liste-ventes', [\App\Models\Vente::class, 'index'])->name('liste_ventes');
Route::post('/sauvegarde-vente', [\App\Models\Vente::class, 'store'])->name('sauvegarde_vente');
Route::get('/creation-vente', [\App\Models\Vente::class, 'create'])->name('creation_vente');
Route::get('/afficher-vente/{vente}', [\App\Models\Vente::class, 'show'])->name('afficher_vente');
Route::post('/mettre-a-jour-vente/{vente}', [\App\Models\Vente::class, 'update'])->name('mettre_a_jour_vente');
Route::post('/suppression-vente/{vente}', [\App\Models\Vente::class, 'destroy'])->name('suppression_vente');
Route::get('/{vente}/mise-a-jour-vente', [\App\Models\Vente::class, 'edit'])->name('mise_a_jour');

//                              //

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
