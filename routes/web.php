<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PortofolioController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;

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

Route::get('login', function () {
    return view('login');
})->name('login');

Route::get('/', function () {
    return view('welcome');
});
Route::get('/',[HomeController::class,'show']);

Route::post('user/auth',[UserController::class,'auth']);
Route::get('user/logout',[UserController::class,'logout']);
Route::get('/template', function(){
    return view ('template');
    
});
// Route::middleware('auth')->group(function(){

Route::get('profil',[ProfilController::class,'show']);
Route::get('profil/add',[ProfilController::class,'add']);
Route::post('profil/create',[ProfilController::class,'create']);
Route::get('profil/edit{id}',[ProfilController::class,'edit']);
Route::post('profil/update/{id}',[ProfilController::class,'update']);


Route::get('portofolio',[PortofolioController::class,'show']);
Route::get('portofolio/add',[PortofolioController::class,'add']);
Route::post('portofolio/create',[PortofolioController::class,'create']);
Route::get('portofolio/hapus/{id}',[PortofolioController::class,'hapus']);
Route::get('portofolio/edit/{id}',[PortofolioController::class,'edit']);
Route::post('portofolio/update/{id}',[PortofolioController::class,'update']);

Route::get('contact',[ContactController::class,'show']);
Route::get('contact/add',[ContactController::class,'add']);
Route::post('contact/create',[ContactController::class,'create']);
Route::get('contact/hapus/{id}',[ContactController::class,'hapus']);






// });
