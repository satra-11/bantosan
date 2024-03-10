<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReportController;
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

/*Route::get('/', function () {
    return view('report');
});*/


Route::get('/','App\Http\Controllers\ReportController@index');
Route::post('/report/remove', [ReportController::class, 'remove'])->name('report.remove');
Route::post('/report/copy', [ReportController::class, 'duplicate'])->name('report.duplicate');
Route::get('/reports', [ReportController::class, 'index'])->name('reports.report');