<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TemplatesController;
use App\Http\Controllers\AboutusController;
use App\Http\Controllers\previousProjectController;
use App\Http\Controllers\subForProposalController;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/templates', [App\Http\Controllers\TemplatesController::class, 'view_templates']);

Route::get('/aboutus', [App\Http\Controllers\AboutusController::class, 'view_aboutus']);

Route::get('/previousProject', [App\Http\Controllers\previousProjectController::class, 'view_previousProject']);

Route::get('/subForProposal', [App\Http\Controllers\subForProposalController::class, 'view_subForProposal']);

