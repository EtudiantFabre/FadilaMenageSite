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

Route::resource('agents',AgentController::class);
Route::resource("candidats", CandidatController::class);
Route::resource('clients',ClientController::class);
Route::resource('personnels',PersonnelController::class);
Route::resource('contrats',ContratController::class);
Route::resource('ventes',VenteController::class);
Route::resource('relanceContrats',RelanceContratController::class);
Route::resource('experienceDuCandidats',ExperienceDuCandidatController::class);





Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
