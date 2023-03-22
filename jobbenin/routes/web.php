<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OffreController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\FreelancerController;

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


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

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
Route::get('/dashboardrecruteur',function (){
  return view ('dashboardrecruteur');
});
Route::get('/modifierprofilpostulant',function (){
  return view ('modifierprofilpostulant');
});
Route::get('/modifierprofilfreelancer',function (){
 return view ('modifierprofilfreelancer');
});

Route::get('/offre',[OffreController::class,'offre']);

Route::get('/freelancer', [FreelancerController::class,'freelancer']);


  Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});