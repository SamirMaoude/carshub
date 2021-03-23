<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\RoleController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Client\ClientController;
use App\Http\Controllers\Client\DemandeController;
use App\Http\Controllers\Admin\ClientController as AdminClientController;

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

Auth::routes();

Route::get('logout', 'App\Http\Controllers\Auth\LoginController@logout');

Route::get('/', [HomeController::class, 'index']);


Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::post('SearchVoiture', [HomeController::class, 'SearchVoiture']);
Route::get('/home', [RoleController::class, 'index']);
Route::match(['get', 'post'],'Contact', [HomeController::class, 'contact']);

Route::get('/Admin', [AdminController::class, 'index']);
Route::match(['get', 'post'],'/Setting', [AdminController::class, 'setting']);
Route::match(['get', 'post'],'/Password', [AdminController::class, 'password']);

Route::resource('GestionContact', 'App\Http\Controllers\Admin\ContactController');
Route::resource('GestionVoiture', 'App\Http\Controllers\Admin\VoitureController');
Route::resource('GestionClient', 'App\Http\Controllers\Admin\ClientController');


Route::get('/Client', [ClientController::class, 'index']);
Route::match(['get', 'post'],'/SettingClient', [ClientController::class,'setting']);
Route::match(['get', 'post'],'/PasswordClient', [ClientController::class,'password']);
// Route::resource('ListDemande', [DemandeController::class]);
// Route::resource('ListVoiture', [VoitureController::class]);
Route::resource('ListDemande', 'App\Http\Controllers\Client\DemandeController');
Route::resource('ListVoiture', 'App\Http\Controllers\Client\VoitureController');
