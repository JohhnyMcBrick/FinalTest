<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PhotoController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AsignaturaController;




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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/dashboard/post',PostController::class);

Route::resource('photos', PhotoController::class)->only([
'index', 'show']);
Route::resource('photos', PhotoController::class)->except([
'create', 'store', 'update', 'destroy']);

Route::resource('asignaturas', 'AsignaturaController');
