<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\OffreController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ConnexionController;
use App\Http\Controllers\FreelancerController;
use App\Http\Controllers\ImageUploadController;
use App\Http\Controllers\PostulerOffreController;
use App\Http\Controllers\DashboardPostulantController;
use App\Http\Controllers\ConnexionPourPostulerController;


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
 
  
  //partiedjemi
  //  

  Route::get('connexion ', 'App\Http\Controllers\ConnexionController@index')->name('connexion');
  Route::post('/connexion ', 'App\Http\Controllers\ConnexionController@connexion');

  Route::get('/connexionpourpostuler/{id_offre}', 'App\Http\Controllers\ConnexionPourPostuler@index')->name('connexionpourpostuler');

  Route::post('/connexionpourpostuler/{id_offre}', 'App\Http\Controllers\ConnexionPourPostuler@connexionpourpostuler')->name('connexionpourpostuler');
  

  Route::get('/inscription ', 'App\Http\Controllers\InscriptionController@index');
  
  Route::post('/inscription ', 'App\Http\Controllers\InscriptionController@inscription');

  

  Route::get('/postuleroffre/{id_offre}','App\Http\Controllers\PostulerOffreController@show')->name('postuleroffre');

  Route::post('/postuleroffre/{id_offre}','App\Http\Controllers\PostulerOffreController@postulerOffre')
  ->name('postuleroffre');
  
  
  
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
 
  Route::get('/modifierprofilpostulant', function () {
    return view('modifierprofilpostulant');
  });


  Route::get('/freelancer ', 'App\Http\Controllers\FreelancerController@index');

  Route::post('/freelancer/{id}/contact', 'App\Http\Controllers\FreelancerController@contact');
  Route::get('/freelancer/{id}', 'App\Http\Controllers\FreelancerController@show')->name('detail_free');


Route::get('/dashboardrecruteur','App\Http\Controllers\DashboardRecruteurController@index' )->name('dashboardrecruteur');
Route::get('/annonce','App\Http\Controllers\DashboardRecruteurController@annonce' )->name('annonce');
Route::get('/attentecv','App\Http\Controllers\DashboardRecruteurController@attentecv' )->name('attentecv');
Route::get('/brouillon','App\Http\Controllers\DashboardRecruteurController@brouillon' )->name('brouillon');
Route::get('/selectioncv','App\Http\Controllers\DashboardRecruteurController@selectioncv' )->name('selectioncv');
Route::get('/entretien','App\Http\Controllers\DashboardRecruteurController@entretien' )->name('entretien');
Route::get('/publicite','App\Http\Controllers\DashboardRecruteurController@publicite' )->name('publicite');


Route::post('/logout', 'App\Http\Controllers\ConnexionController@logout')->name('logout');

Route::get('/attentecv/selection/{id_user}/{id_offre}', 'App\Http\Controllers\DashboardRecruteurController@selectionner')->name('attentecv.selection');

Route::get('/attentecv/{id_user}/{id_offre}', 'App\Http\Controllers\DashboardRecruteurController@supprimerpostulant')->name('attentecv.supprimer');

Route::get('/recruteur/{id}', 'App\Http\Controllers\RecruteurController@show')->name('profilrecruteur');
Route::post('/recruteur/{id}', 'App\Http\Controllers\RecruteurController@show')->name('profilrecruteur');




///TEST DJEMI 
Route::get('/offre',[OffreController::class,'offre']);

Route::get('/offre/{id}', 'App\Http\Controllers\OffreController@show')->name('detail_offre');

Route::get('/dashboardpostulant', 'App\Http\Controllers\DashboardPostulantController@index')->name('dashboardpostulant');

Route::get('/vosoffres','App\Http\Controllers\DashboardPostulantController@vosoffres' )->name('vosoffres');
Route::get('/recommandation','App\Http\Controllers\DashboardPostulantController@recommandations' )->name('recommandation');
Route::get('/profilpostulant','App\Http\Controllers\DashboardPostulantController@profilpostulant' )->name('profilpostulant');
Route::put('/postulant/{id}', 'App\Http\Controllers\DashboardPostulantController@update')->name('postulant.update');
Route::get('/supprimer_offre/{id}', 'App\Http\Controllers\DashboardPostulantController@supprimerOffre')->name('supprimer_offre');
Route::get('/dashboardfreelancer', 'App\Http\Controllers\DashboardFreelancerController@index')->name('dashboardfreelancer');
Route::get('/profilfreelancer','App\Http\Controllers\DashboardFreelancerController@profilfree' )->name('profilfreelancer');
Route::put('/users/{id}', 'App\Http\Controllers\DashboardFreelancerController@update')->name('user.update');

Route::get('/supprimer_postulant/{id}', 'App\Http\Controllers\DashboardRecruteurController@supprimerpostulant')->name('supprimer_postulant');
Route::put('/recruteurs/{id}', 'App\Http\Controllers\DashboardRecruteurController@update')->name('recruteur.update');

Route::get('/offremodif/{id}', 'App\Http\Controllers\OffreController@modifieroffre')->name('modifieroffre');
Route::put('/offre/{id}', 'App\Http\Controllers\OffreController@update')->name('offre.update');

Route::get('/publierannonce', 'App\Http\Controllers\PublierAnnonceController@index');
Route::post('/annonce', 'App\Http\Controllers\PublierAnnonceController@publierannonce')->name('annoncepublier');

Route::get('/dashboardfreelancer', 'App\Http\Controllers\DashboardFreelancerController@index')->
name('dashboardfreelancer');
Route::get('/profilfreelancer','App\Http\Controllers\DashboardFreelancerController@profilfree' )
->name('profilfreelancer');
Route::put('/users/{id}', 'App\Http\Controllers\DashboardFreelancerController@update')->
name('user.update');

Route::get('/espace ', 'App\Http\Controllers\EspaceController@index');


//ADMIN

Route::get('admin/', function () {
  return view('Admin/tableaudebord');
});
Route::get('/nouvelpub', 'App\Http\Controllers\Admin2Controller@offresNonPubliees')->name('admin.nouvelpub');


Route::get('/offremodif', function () {
  return view('Admin/offremodif');
});
Route::get('/offresignal', function () {
  return view('Admin/offresignal');
});
Route::get('/transaction', function () {
  return view('Admin/transaction');
});
Route::get('/addadmin', function () {
  return view('Admin/addadmin');
});
Route::get('/adminj', function () {
  return view('Admin/adminj');
});
Route::get('tableaudebord ', 'App\Http\Controllers\Admin1Controller@index');
Route::get('recruteur ', 'App\Http\Controllers\Admin1Controller@recruteur')->name('recruteur');
Route::get('postulant ', 'App\Http\Controllers\Admin1Controller@postulant')->name('postulant');
Route::get('freelancer ', 'App\Http\Controllers\Admin1Controller@freelancer')->name('freelancer');
Route::get('recruteur/{id}/desactiver', 'App\Http\Controllers\Admin1Controller@desactiverrecruteur')->name('desactiver.recruteur');
Route::get('recruteur/{id}/activer', 'App\Http\Controllers\Admin1Controller@activerrecruteur')->name('activer.recruteur');
Route::get('postulant/{id}/desactiver', 'App\Http\Controllers\Admin1Controller@desactiverpostulant')->name('desactiver.postulant');
Route::get('postulant/{id}/activer', 'App\Http\Controllers\Admin1Controller@activerpostulant')->name('activer.postulant');
Route::get('freelancer/{id}/desactiver', 'App\Http\Controllers\Admin1Controller@desactiverfreelancer')->name('desactiver.freelancer');
Route::get('freelancer/{id}/activer', 'App\Http\Controllers\Admin1Controller@activerfreelancer')->name('activer.freelancer');
