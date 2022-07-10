<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccueilController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\OeuvreController;

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


//Accueil
Route::get('/',[AccueilController::class,'index'])->name('accueil');



//Items (pour les faire des tests)
Route::get('/item/{id}',[ItemController::class,'show'])->whereNumber('id');

//Oeuvres
Route::get('/oeuvres/create',[OeuvreController::class,'create'])->name('oeuvres.create');
Route::post('/oeuvres/create',[OeuvreController::class,'store'])->name('oeuvres.store');
Route::get('/oeuvre/{id}',[OeuvreController::class,'show'])->whereNumber('id')->name('oeuvres.show');
Route::get('/oeuvres',[OeuvreController::class,'index'])->name('oeuvres');

Route::get('/register',[OeuvreController::class,'register']);





