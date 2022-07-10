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

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/',[AccueilController::class,'index'])->name('accueil');



//route to ItemController@show
Route::get('/item/{id}',[ItemController::class,'show'])->whereNumber('id');
Route::get('/oeuvre/{id}',[OeuvreController::class,'show'])->whereNumber('id');
Route::get('/oeuvres',[OeuvreController::class,'index'])->name('oeuvres');


/*


Route::get('/testText', function () {
    return 'test';
});

Route::get('/testJSON', function () {
    return response()->json(['name' => 'Abigail', 'state' => 'CA']);
});
*/
