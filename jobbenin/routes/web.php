<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\OffreController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\FreelancerController;
use App\Http\Controllers\ImageUploadController;
use App\Http\Controllers\DashboardPostulantController;


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



Route::get('/', [WelcomeController::class,'index']);


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

  
  Route::get('/publierannonce', function (){
    return view('publierannonce');
  });
  Route::get('/offre/{id}/postuleroffre', function () {
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


  Route::get('/freelancer ', 'App\Http\Controllers\FreelancerController@index');

  Route::get('/freelancer/{id}', 'App\Http\Controllers\FreelancerController@show')->name('detail_free');

Route::get('/offre',[OffreController::class,'offre']);


Route::post('/freelancer/{id}/contact', 'App\Http\Controllers\FreelancerController@contact');

Route::get('/offre/{id}', 'App\Http\Controllers\OffreController@show')->name('detail_offre');




///TEST DJEMI 
 

Route::group(['namespace' => 'App\Http\Controllers'], function()
{   
    Route::get('/modifierprofilfreelancer', 'ModifierProfilFreelancerController@index')->
    name('modifier-profil-freelancer.index');

    Route::post('/modifierprofilfreelancer', 'ModifierProfilFreelancerController@upload')->name('modifier-profil-freelancer.post');
});

Route::get('/dashboardpostulant', 'App\Http\Controllers\DashboardPostulantController@index')->name('dashboardpostulant');
