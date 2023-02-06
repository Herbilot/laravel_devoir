<?php

use App\Http\Controllers\etudiantController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/etudiant', [etudiantController::class, 'index']);
Route::get('/ajouter', [etudiantController::class, 'add']);
Route::post('/enregistrer', [etudiantController::class, 'saveEtu']);
Route::get('/supprimer[id}', [etudiantController::class, 'delete']);
