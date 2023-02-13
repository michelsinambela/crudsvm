<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\EmployeeController;

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

// data penyakit stroke
Route::get('/pstroke',[EmployeeController::class, 'index'])->name('pstroke');

// + data penyakit stroke
Route::get('/tpstroke',[EmployeeController::class, 'tpstroke'])->name('tpstroke');
// insert data
Route::post('/insertdata',[EmployeeController::class, 'insertdata'])->name('insertdata');
// tdpstroke
Route::get('/tdpstroke/{id}',[EmployeeController::class, 'tdpstroke'])->name('tdpstroke');
Route::post('/udpstroke/{id}',[EmployeeController::class, 'udpstroke'])->name('udpstroke');
// hpstroke
Route::get('/hpstroke/{id}',[EmployeeController::class, 'hpstroke'])->name('hpstroke');

// export pdf
Route::get('/exportpdf',[EmployeeController::class, 'exportpdf'])->name('exportpdf');

// form login
Route::get('/login',[LoginController::class, 'login'])->name('login');
// form proses login
Route::post('/loginproses',[LoginController::class, 'loginproses'])->name('loginproses');

// form register
Route::get('/register',[LoginController::class, 'register'])->name('register');
// form save database
Route::post('/registeruser',[LoginController::class, 'registeruser'])->name('registeruser');

// import excel
Route::post('/importexcel',[EmployeeController::class, 'importexcel'])->name('importexcel');


