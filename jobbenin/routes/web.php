<?php

use Illuminate\Support\Facades\Route;
use App\Models\Offre;
use App\Models\Freelancer;
use App\Models\DashboardRecruteur;
use App\Models\DashboardPostulant;
use App\Models\annonce;
use App\Models\attentecv;
use App\Models\selectioncv;





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

Route::get('offre', function () {
    $offre=offre::all();
    return view('offre')->with(["offre"=>$offre]);
})->name("offre");

Route::get('freelancer', function () {
    $freelancer=freelancer::all();
    return view('freelancer')->with(["freelancer"=>$freelancer]);
})->name("freelancer");

Route::get('connexion',function(){
   return view('connexion');
})->name('connexion');




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

//partiedjemi
//  
Route::get('/connexion', function () {
  return view('connexion');
});
Route::get('/inscriptionpostulant ', function () {
  return view('inscriptionpostulant');
});
Route::get('/inscriptionfreelancer ', function () {
  return view('inscriptionfreelancer');
});
Route::get('/inscriptionrecruteur ', function () {
  return view('inscriptionrecruteur');
});
Route::get('/publierannonce ', function () {
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
