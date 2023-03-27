<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/annonce', function () {
    return view('annonce');
  });
  Route::get('/attentecv', function () {
    return view('attentecv');
  });
  Route::get('/selectioncv', function () {
    return view('selectioncv');
  });
  Route::get('/entretien', function () {
    return view('entretien');
  });
  Route::get('/brouillon', function () {
    return view('brouillon');
  });
  Route::get('/detail_offre', function () {
    return view('detail_offre');
  });
  Route::get('/detail_free', function () {
    return view('detail_free');
  });
  Route::get('/profilrecruteur', function () {
    return view('profilrecruteur');
  });
  
  //partiedjemi
  //  

  Route::get('connexion ', 'App\Http\Controllers\ConnexionController@index');

  Route::post('connexion.post ', 'App\Http\Controllers\ConnexionController@connexion');

  Route::get('/inscription ', 'App\Http\Controllers\InscriptionController@index');
  
  Route::post('/inscription ', 'App\Http\Controllers\InscriptionController@inscription');

  Route::get('/inscriptionrecruteur ', 'App\Http\Controllers\InscriptionRecruteurController@index');
  
  Route::post('/inscriptionrecruteur ', 'App\Http\Controllers\InscriptionRecruteurController@inscriptionrecruteur');
  
  Route::get('/inscriptionfreelancer ', 'App\Http\Controllers\InscriptionFreelancerController@index');
  Route::post('/inscriptionfreelancer ', 'App\Http\Controllers\InscriptionFreelancerController@inscriptionfreelancer');
  
  
  Route::get('/inscriptionpostulant ', 'App\Http\Controllers\InscriptionPostulantController@index');
  Route::post('/inscriptionpostulant ', 'App\Http\Controllers\InscriptionPostulantController@inscriptionpostulant');

  
  Route::get('/publierannonce', function () {
    return view('publierannonce');
  });
  Route::get('/postuleroffre', function () {
    return view('postuleroffre');
  });
  Route::get('/apropos', function () {
    return view('apropos');
  });
  
  Route::get('/dashboardpostulant', function () {
    return view('dashboardpostulant');
  });
  Route::get('/dashboardfreelancer', function () {
    return view('dashboardfreelancer');
  });
  Route::get('/vosoffres', function () {
    return view('vosoffres');
  });
  Route::get('/recommandation', function () {
    return view('recommandation');
  });
  Route::get('/profilpostulant', function () {
    return view('profilpostulant');
  });
  Route::get('/profilfreelancer', function () {
    return view('profilfreelancer');
  });
  Route::get('/dashboardrecruteur', function () {
    return view('dashboardrecruteur');
  });
  Route::get('/modifierprofilpostulant', function () {
    return view('modifierprofilpostulant');
  });
  Route::get('/modifierprofilfreelancer', function () {
    return view('modifierprofilfreelancer');
  });
  
  Route::get('/offre', function () {
    return view('offre');
  });
  Route::get('/freelancer', function () {
    return view('freelancer');
  });