<?php

use App\Http\Controllers\jenis_bukuController;
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

Route::get('/jenis_buku', [jenis_bukuController::class, 'index']);
Route::get('/jenis_buku/export_excel',[jenis_bukuController::class,'export_excel']);
