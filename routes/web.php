<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\DirecteurController;
use App\Http\Controllers\evenementController;
use App\Http\Controllers\PVController;
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


Route::get('/',[Controller::class,'index2'])->name('accueil');
Route::get('aboutus',[Controller::class,'get_aboutus'])->name('aboutus');
Route::get('actualites',[Controller::class,'get_actualites'])->name('actualites');
Route::get('show/{id}', [Controller::class, 'show'])->name('show');
Route::get('administration',[Controller::class,'get_administration'])->name('administration');
Route::get('article_unique',[Controller::class,'get_article_unique'])->name('article_unique');
Route::get('bcs',[Controller::class,'get_bcs'])->name('bcs');
Route::get('bue',[Controller::class,'get_bue'])->name('bue');
Route::get('clubs',[Controller::class,'get_clubs'])->name('clubs');
Route::get('contact',[Controller::class,'get_contact'])->name('contact');
Route::get('formations',[Controller::class,'get_formations'])->name('formations');
Route::get('consultations',[Controller::class,'get_consultations'])->name('consultations');
Route::get('show-consultation/{id}',[Controller::class,'show_consultation'])->name('consulation_unique');






Route::get('EneamAdmin',[Controller::class,'index'])->name('admin');
Route::get('all-pv',[PVController::class,'index'])->name('all-pv');
Route::get('add-pv',[PVController::class,'add'])->name('add-pv');
Route::post('store-pv',[PVController::class,'store'])->name('store-pv');
Route::get('edit-pv',[PVController::class,'edit'])->name('edit-pv');
Route::get('delete-pv/{id}', [PVController::class, 'destroy'])->name('delete-pv');
Route::get('show-pv/{id}', [PVController::class, 'show'])->name('show-pv');



Route::get('all-evenement',[evenementController::class,'index'])->name('all-evenement');
Route::get('add-evenement',[evenementController::class,'add'])->name('add-evenement');
Route::post('store',[evenementController::class,'store'])->name('store');
Route::get('edit-evenement',[evenementController::class,'edit'])->name('edit-evenement');
Route::get('delete-evenement/{id}', [evenementController::class, 'destroy'])->name('delete-evenement');
Route::get('show-evenement/{id}', [evenementController::class, 'show'])->name('show-evenement');

Route::get('all-directeur',[DirecteurController::class,'index'])->name('all-directeur');
Route::get('add-directeur',[DirecteurController::class,'add'])->name('add-directeur');
Route::post('store',[DirecteurController::class,'store'])->name('store');
Route::get('edit-directeur',[DirecteurController::class,'edit'])->name('edit-directeur');
Route::get('delete-directeur/{id}', [DirecteurController::class, 'destroy'])->name('delete-directeur');
Route::get('show-directeur/{id}', [DirecteurController::class, 'show'])->name('show-directeur');



