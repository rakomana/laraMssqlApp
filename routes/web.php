<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\TicketController;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/report', [ReportController::class, 'index']);
Route::post('/ticket', [TicketController::class, 'store']);
Route::get('/ticket', fn() => view('ticket'));
Route::get('/file-manipulation', fn()=>view('file-manipulation'));
Route::get('/complex-queries', fn() => view('complex-queries'));
