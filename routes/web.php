<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\ExportController;
use App\Http\Controllers\admin\PdfController;
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

Route::get('/dashboar', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::resource('dashboardList', DashboardController::class)->middleware(['auth']);
Route::get('csv-export',[ExportController::class,'exportCSV']);
Route::get('/cghs/pdf/{id}', [App\Http\Controllers\admin\PdfController::class, 'export_pdf'])->name('pdf');
require __DIR__.'/auth.php';