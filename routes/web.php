<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AbonneController;
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


Auth::routes();

Route::get('/enregistrement', [\App\Http\Controllers\AbonneController::class, 'index'])->name('Form');

Route::get('/direction', function () {
    return view('direction');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::resource('abonne', AbonneController::class);


