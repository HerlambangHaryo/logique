<?php

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


Route::any('/excel/temptosql/{param_1}', 'App\Http\Controllers\ExcelController@temptosql');

Route::post('/formfront/post', 'App\Http\Controllers\FormfrontController@post');

Route::post('/wwform/postdata', 'App\Http\Controllers\WwformController@postdata');
Route::any('/wwform/generate', 'App\Http\Controllers\WwformController@generate');

//web worker data general routes
Route::any('/wwdata/generate/{param_1}/{param_2}/{param_3}/{param_4}', 'App\Http\Controllers\WwdataController@generate');
Route::any('/wwdata/autocomplete', 'App\Http\Controllers\WwdataController@autocomplete');
Route::any('/wwdata/accordion', 'App\Http\Controllers\WwdataController@accordion');


// Route::any('/', [MainController::class, '/']);
Route::any('/', 'App\Http\Controllers\MainController@index');
Route::any('/{param_1}', 'App\Http\Controllers\MainController@index');
Route::any('/{param_1}/{param_2}', 'App\Http\Controllers\MainController@index');
Route::any('/{param_1}/{param_2}/{param_3}', 'App\Http\Controllers\MainController@index');
/*
Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
*/

