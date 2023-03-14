<?php

use Illuminate\Support\Facades\Route;
use App\Models\Offre;
use App\Models\Freelancer;
use App\Models\DashboardRecruteur;


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


