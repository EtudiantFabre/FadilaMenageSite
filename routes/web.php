<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\HomeController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\CandidatController;
use App\Http\Controllers\ExperienceDuCandidatController;
use App\Http\Controllers\PersonnelController;
use App\Http\Controllers\ContratController;
use App\Http\Controllers\RelanceContratController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\VenteController;

use App\Http\Controllers\AgentPonctuelController;
use App\Http\Controllers\SuiviController;
use App\Http\Controllers\SocieteController;
use App\Http\Controllers\ProspectionController;
use App\Http\Controllers\PonctuelController;
use App\Http\Controllers\AppelOffreController;
use App\Http\Controllers\EvaluationController;
use App\Http\Controllers\FactureController;
use App\Http\Controllers\PersonneAprevenirController;
use App\Http\Controllers\MessageController;

use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Prospection;


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

//Route::get("simple-qrcode", "SimpleQRcodeController@generate");


Route::get('/', function () {
    return view('welcome');
});


Route::get('/test-contact', function () {
    return new App\Mail\Contact([
        'nom' => 'Durand',
        'email' => 'fabricetoyi87@gmail.com',
        'message' => 'Je voulais te dire que tout viens de commencer !!'
    ]);
});

/*
Route::get("message", "MessageController@formMessageGoogle");
Route::post("message", "MessageController@sendMessageGoogle")->name('send.message.google');*/


Route::get('message', [MessageController::class], 'formMessageGoogle');
Route::post('message', [MessageController::class], 'sendMessageGoogle')->name('send.message.google');

/*Route::get('/test', function () {
    $pdf = Pdf::loadView('test');
    return view('test')->with('pdf', $pdf->stream('test.pdf'));//
});*/

//Route::get('imprimer', 'FactureController@imprimer')->name('imprimer');

//  Route ajouter par moi :

//  Agents


Route::resource('agents',AgentController::class);
Route::resource("candidats", CandidatController::class);
Route::resource('clients',ClientController::class);
Route::resource('personnels',PersonnelController::class);
Route::resource('contrats',ContratController::class);
Route::resource('ventes',VenteController::class);
Route::resource('relanceContrats',RelanceContratController::class);
Route::resource('experienceDuCandidats',ExperienceDuCandidatController::class);






Route::resource('agents', AgentController::class);

//  AgentPonctuel

Route::resource('agentPonctuels', AgentPonctuelController::class);
Route::post('liste-des-agents', [AgentController::class], 'listeAgents')->name('liste-agents');
/*
Route::get('liste-agent-ponctuels', [AgentPonctuelController::class, 'index']);//->name('liste_agent_ponctuels');
Route::post('enregistrement-agent-ponctuel', [AgentPonctuelController::class, 'store'], 'enregistrement_agent_ponctuel');
Route::get('creation-agent-ponctuel', [AgentPonctuelController::class, 'create'], 'creation_agent_ponctuel');
Route::get('afficher-agent-ponctuel/{agent_ponctuel}', [AgentPonctuelController::class, 'show'], 'afficher_agent_ponctuel');
Route::post('mettre-a-jour-agent-ponctuel/{agent_ponctuel}', [AgentPonctuelController::class, 'update'], 'mettre_a_jour_agent_ponctuel');
Route::post('suppression-agent-ponctuel/{agent_ponctuel}', [AgentPonctuelController::class, 'destroy'], 'suppression_agent_ponctuel');
Route::get('{agent_ponctuel}/mise-a-jour', [AgentPonctuelController::class, 'edit'], 'mise_a_jour');
*/
//                              //


//  AppelOffre
Route::resource('appelOffres', AppelOffreController::class);
/*
Route::get('liste-appel-offres', [AppelOffreController::class, 'index'], 'liste_appel_offres');
Route::post('sauvegarde-appel-offre', [AppelOffreController::class, 'store'], 'sauvegarde_appel_offre');
Route::get('creation-appel-offre', [AppelOffreController::class, 'create'], 'creation_appel_offre');
Route::get('afficher-appel-offre/{appel_offre}', [AppelOffreController::class, 'show'], 'afficher_appel_offre');
Route::post('mettre-a-jour-appel-offre/{appel_offre}', [AppelOffreController::class, 'update'], 'mettre_a_jour_appel_offre');
Route::post('suppression-agent-ponctuel/{appel_offre}', [AppelOffreController::class, 'destroy'], 'suppression_appel_offre');
Route::get('{appel_offre}/mise-a-jour', [AppelOffreController::class, 'edit'], 'mise_a_jour');
*/

//

//  Candidat
Route::resource('candidats', CandidatController::class);
/*
Route::get('liste-candidats', [CandidatController::class, 'index'], 'liste_candidats');
Route::post('sauvegarde-candidat', [CandidatController::class, 'store'], 'sauvegarde_candidat');
Route::get('creation-candidat', [CandidatController::class, 'create'], 'creation_candidat');
Route::get('afficher-candidat/{candidat}', [CandidatController::class, 'show'], 'afficher_candidat');
Route::post('mettre-a-jour-candidat/{candidat}', [CandidatController::class, 'update'], 'mettre_a_jour_candidat');
Route::post('suppression-candidat/{candidat}', [CandidatController::class, 'destroy'], 'suppression_candidat');
Route::get('{candidat}/mise-a-jour', [CandidatController::class, 'edit'], 'mise_a_jour');
*/

//                              //

//  Client
Route::resource('clients', ClientController::class);
/*
Route::get('liste-clients', [ClientController::class, 'index'], 'liste_clients');
Route::post('sauvegarde-client', [ClientController::class, 'store'], 'sauvegarde_client');
Route::get('creation-client', [ClientController::class, 'create'], 'creation_client');
Route::get('afficher-client/{client}', [ClientController::class, 'show'], 'afficher_client');
Route::post('mettre-a-jour-client/{client}', [ClientController::class, 'update'], 'mettre_a_jour_client');
Route::post('suppression-client/{client}', [ClientController::class, 'destroy'], 'suppression_client');
Route::get('{client}/mise-a-jour', [ClientController::class, 'edit'], 'mise_a_jour');
*/
//                              //


//  Contrat
Route::resource('contrats', ContratController::class);
/*
Route::get('liste-contrats', [ContratController::class, 'index'], 'liste_contrats');
Route::post('sauvegarde-contrat', [ContratController::class, 'store'], 'sauvegarde_contrat');
Route::get('creation-contrat', [ContratController::class, 'create'], 'creation_contrat');
Route::get('afficher-contrat/{contrat}', [ContratController::class, 'show'], 'afficher_contrat');
Route::post('mettre-a-jour-contrat/{contrat}', [ContratController::class, 'update'], 'mettre_a_jour_contrat');
Route::post('suppression-contrat/{contrat}', [ContratController::class, 'destroy'], 'suppression_contrat');
Route::get('{contrat}/mise-a-jour', [ContratController::class, 'edit'], 'mise_a_jour');
*/
//                              //


//  Evaluation
Route::resource('evaluations', EvaluationController::class);
/*
Route::get('liste-evaluations', [EvaluationController::class, 'index'], 'liste_evaluations');
Route::post('sauvegarde-evaluation', [EvaluationController::class, 'store'], 'sauvegarde_evaluation');
Route::get('creation-evaluation', [EvaluationController::class, 'create'], 'creation_evaluation');
Route::get('afficher-evaluation/{evaluation}', [EvaluationController::class, 'show'], 'afficher_evaluation');
Route::post('mettre-a-jour-evaluation/{evaluation}', [EvaluationController::class, 'update'], 'mettre_a_jour_evaluation');
Route::post('suppression-evaluation/{evaluation}', [EvaluationController::class, 'destroy'], 'suppression_evaluation');
Route::get('{evaluation}/mise-a-jour', [EvaluationController::class, 'edit'], 'mise_a_jour');
*/
//                              //


//  ExperienceDuCandidat
Route::resource('ExperienceDuCandidats', ExperienceDuCandidatController::class);
/*
Route::get('liste-experience-candidats', [ExperienceDuCandidatController::class, 'index'], 'liste_experience_candidats');
Route::post('sauvegarde-experience-candidat', [ExperienceDuCandidatController::class, 'store'], 'sauvegarde_experience_candidat');
Route::get('creation-experience-candidat', [ExperienceDuCandidatController::class, 'create'], 'creation_experience_candidat');
Route::get('afficher-experience-candidat/{experience_candidat}', [ExperienceDuCandidatController::class, 'show'], 'afficher_experience_candidat');
Route::post('mettre-a-jour-experience-candidat/{experience_candidat}', [ExperienceDuCandidatController::class, 'update'], 'mettre_a_jour_experience_candidat');
Route::post('suppression-experience-candidat/{experience_candidat}', [ExperienceDuCandidatController::class, 'destroy'], 'suppression_experience_candidat');
Route::get('{experience_candidat}/mise-a-jour', [ExperienceDuCandidatController::class, 'edit'], 'mise_a_jour');
*/
//                              //


//  Facture
Route::resource('factures', FactureController::class);


//Route::get('liste-factures', 'FactureController@index')->name('liste_factures');
/*Route::post('sauvegarde-facture', [FactureController::class, 'store'], 'sauvegarde_facture');
Route::get('creation-facture', [FactureController::class, 'create'], 'creation_facture');
Route::get('afficher-facture/{facture}', [FactureController::class, 'show'], 'afficher_facture');
Route::post('mettre-a-jour-facture/{facture}', [FactureController::class, 'update'], 'mettre_a_jour_facture');
Route::post('suppression-facture/{facture}', [FactureController::class, 'destroy'], 'suppression_facture');
Route::get('{facture}/mise-a-jour', [FactureController::class, 'edit'], 'mise_a_jour');
*/
//                              //


                            //


//  PersonneAprevenir
Route::resource('personneAprevenirs', PersonneAprevenirController::class);
/*
Route::get('liste-personnes-a-prevenir', [PersonneAprevenirController::class, 'index'], 'liste_personnes_a_prevenir');
Route::post('sauvegarde-personne-a-prevenir', [PersonneAprevenirController::class, 'store'], 'sauvegarde_personne_a_prevenir');
Route::get('creation-personne-a-prevenir', [PersonneAprevenirController::class, 'create'], 'creation_personne_a_prevenir');
Route::get('afficher-personne-a-prevenir/{personne}', [PersonneAprevenirController::class, 'show'], 'afficher_personne_a_prevenir');
Route::post('mettre-a-jour-personne-a-prevenir/{personne}', [PersonneAprevenirController::class, 'update'], 'mettre_a_jour_personne_a_prevenir');
Route::post('suppression-personne-a-prevenir/{personne}', [PersonneAprevenirController::class, 'destroy'], 'suppression_personne_a_prevenir');
Route::get('{personne}/mise-a-jour', [PersonneAprevenirController::class, 'edit'], 'mise_a_jour');
*/
//                              //


//  Personnel
Route::resource('personnels', PersonnelController::class);
/*
Route::get('liste-personnels', [PersonnelController::class, 'index'], 'liste_personnels');
Route::post('sauvegarde-personnel', [PersonnelController::class, 'store'], 'sauvegarde_personnel');
Route::get('creation-personnel', [PersonnelController::class, 'create'], 'creation_personnel');
Route::get('afficher-personnel/{personnel}', [PersonnelController::class, 'show'], 'afficher_personnel');
Route::post('mettre-a-jour-personnel/{personnel}', [PersonnelController::class, 'update'], 'mettre_a_jour_personnel');
Route::post('suppression-personnel/{personnel}', [PersonnelController::class, 'destroy'], 'suppression_personnel');
Route::get('{personnel}/mise-a-jour', [PersonnelController::class, 'edit'], 'mise_a_jour');
*/
//                              //


//  Ponctuel
Route::resource('ponctuels', PonctuelController::class);
/*
Route::get('liste-ponctuels', [PonctuelController::class, 'index'], 'liste_ponctuels');
Route::post('sauvegarde-ponctuel', [PonctuelController::class, 'store'], 'sauvegarde_ponctuel');
Route::get('creation-ponctuel', [PonctuelController::class, 'create'], 'creation_ponctuel');
Route::get('afficher-ponctuel/{personnel}', [PonctuelController::class, 'show'], 'afficher_ponctuel');
Route::post('mettre-a-jour-ponctuel/{personnel}', [PonctuelController::class, 'update'], 'mettre_a_jour_ponctuel');
Route::post('suppression-ponctuel/{personnel}', [PonctuelController::class, 'destroy'], 'suppression_ponctuel');
Route::get('{ponctuel}/mise-a-jour', [PonctuelController::class, 'edit'], 'mise_a_jour');
*/
//                              //


//  Prospection
Route::resource('prospections', ProspectionController::class);

Route::post('enregistrement-client-prospections', [ProspectionController::class, 'prosClient'])->name('prosClient');

/*
Route::get('liste-prospections', [ProspectionController::class, 'index'], 'liste_prospections');
Route::post('sauvegarde-prospection', [ProspectionController::class, 'store'], 'sauvegarde_prospection');
Route::get('creation-prospection', [ProspectionController::class, 'create'], 'creation_prospection');
Route::get('afficher-prospection/{prospection}', [ProspectionController::class, 'show'], 'afficher_prospection');
Route::post('mettre-a-jour-prospection/{prospection}', [ProspectionController::class, 'update'], 'mettre_a_jour_prospection');
Route::post('suppression-prospection/{prospection}', [ProspectionController::class, 'destroy'], 'suppression_prospection');
Route::get('{prospection}/mise-a-jour', [ProspectionController::class, 'edit'], 'mise_a_jour');
*/
//                              //


//  RelanceContrat
Route::resource('relanceContrats', RelanceContratController::class);
/*
Route::get('liste-relance-conts', [RelanceContratController::class, 'index'], 'liste_relance_conts');
Route::post('sauvegarde-relance-cont', [RelanceContratController::class, 'store'], 'sauvegarde_relance_cont');
Route::get('creation-relance-cont', [RelanceContratController::class, 'create'], 'creation_relance_cont');
Route::get('afficher-relance-cont/{relance_contrat}', [RelanceContratController::class, 'show'], 'afficher_relance_cont');
Route::post('mettre-a-jour-relance-cont/{relance_contrat}', [RelanceContratController::class, 'update'], 'mettre_a_jour_relance_cont');
Route::post('suppression-relance-cont/{relance_contrat}', [RelanceContratController::class, 'destroy'], 'suppression_relance_cont');
Route::get('{relance_contrat}/mise-a-jour', [RelanceContratController::class, 'edit'], 'mise_a_jour');
*/
//                              //


//  Societe
Route::resource('societes', SocieteController::class);
/*
Route::get('liste-societes/', [SocieteController::class, 'index'], 'liste_societes');
Route::post('sauvegarde-societe/', [SocieteController::class, 'store'], 'sauvegarde_societe');
Route::get('creation-societe/', [SocieteController::class, 'create'], 'creation_societe');
Route::get('afficher-societe/{societe}/', [SocieteController::class, 'show'], 'afficher_societe');
Route::post('mettre-a-jour-societe/{societe}/', [SocieteController::class, 'update'], 'mettre_a_jour_societe');
Route::post('suppression-societe/{societe}/', [SocieteController::class, 'destroy'], 'suppression_societe');
Route::get('{societe}/mise-a-jour/', [SocieteController::class, 'edit'], 'mise_a_jour');
*/
//                              //


//  Suivi
Route::resource('suivis', SuiviController::class);
/*
Route::get('/liste-suivis', [SuiviController::class, 'index']);
Route::post('/sauvegarde-suivi', [SuiviController::class, 'store']);
Route::get('/creation-suivi', [SuiviController::class, 'create']);
Route::get('/afficher-suivi/{suivi}', [SuiviController::class, 'show']);
Route::post('/mettre-a-jour-suivi/{suivi}', [SuiviController::class, 'update']);
Route::post('/suppression-suivi/{suivi}', [SuiviController::class, 'destroy']);
Route::get('/{suivi}/mise-a-jour', [SuiviController::class, 'edit']);
*/
//                              //


//  Vente
Route::resource('ventes', VenteController::class);
/*
Route::get('liste-ventes', [VenteController::class, 'index'], 'liste_ventes');
Route::post('sauvegarde-vente', [VenteController::class, 'store'], 'sauvegarde_vente');
Route::get('creation-vente', [VenteController::class, 'create'], 'creation_vente');
Route::get('afficher-vente/{vente}', [VenteController::class, 'show'], 'afficher_vente');
Route::post('mettre-a-jour-vente/{vente}', [VenteController::class, 'update'], 'mettre_a_jour_vente');
Route::post('suppression-vente/{vente}', [VenteController::class, 'destroy'], 'suppression_vente');
Route::get('vente}/mise-a-jour-vente', [VenteController::class, 'edit'], 'mise_a_jour');
*/
//                              //


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
