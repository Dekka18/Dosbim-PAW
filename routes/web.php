<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dekka1462200067Controller;
use App\Http\Controllers\HistoryPenyakitController;

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

// Tampilan pasien
Route::get('/adminIndex', [dekka1462200067Controller::class, 'adminIndex']);
Route::get('/adminAdd', [dekka1462200067Controller::class, 'adminAdd']);
Route::get('/adminEdit/{id}', [dekka1462200067Controller::class, 'adminEdit']);

// Fungsi pasien
Route::post('/add', [dekka1462200067Controller::class, 'AddAdmin']);
Route::post('/edit', [dekka1462200067Controller::class, 'EditAdmin']);
Route::get('/delete/{id}', [dekka1462200067Controller::class, 'DeleteAdmin']);

// Tampilan history
Route::get('/historyIndex', [HistoryPenyakitController::class, 'historyIndex']);
Route::get('/historyAdd', [HistoryPenyakitController::class, 'historyAdd']);
Route::get('/historyEdit/{id}', [HistoryPenyakitController::class, 'historyEdit']);

// Fungsi history
Route::post('/addHistory', [HistoryPenyakitController::class, 'AddHistory']); 
Route::post('/editHistory', [HistoryPenyakitController::class, 'EditHistory']);
Route::get('/deleteHistory/{id}', [HistoryPenyakitController::class, 'DeleteHistory']);
