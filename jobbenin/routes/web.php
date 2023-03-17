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



Route::get('/dashboardpostulant', function () {
    return view('dashboardpostulant');
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
Route::get('/detailoffre', function () {
    return view('detail_offre');
});
Route::get('/detailfree', function () {
    return view('detail_free');
});
Route::get('inscriptionfree',function(){
  return view('inscriptionfree');
})->name('inscriptionfree');

Route::get('inscriptionrec',function(){
    return view('inscriptionrec');
  })->name('inscriptionrec');

  Route::get('inscriptionpost',function(){
    return view('inscriptionpost');
  })->name('inscriptionpost');

  Route::get('apropos',function(){
    return view('apropos');
  })->name('apropos');
  
  Route::get('dashboardpostulant',function(){
     return view('dashboardpostulant');
    })->name('dashboardpostulant');

  Route::get('dashboardrecruteur',function(){
    return view('dashboardrecruteur');
  })->name('dashboardrecruteur');
    
  Route::get('dashboardfreelancer',function(){
    return view('dashboardfreelancer');
  })->name('dashboardfreelancer');
    
  Route::get('recommandationpostulant',function(){
     return view('recommandationpostulant');
  })->name('recommandationpostulant');

  Route::get('postuler',function(){
   return view('postuler');
  })->name('postuler');
  
  Route::get('puboffre',function(){
   return view('puboffre');
  })->name('puboffre');
  
  Route::get('profilpostulant',function(){
    return view('profilpostulant');
   })->name('profilpostulant');
   
   
  
