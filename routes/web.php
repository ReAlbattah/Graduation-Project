<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TemplatesController;
use App\Http\Controllers\AboutusController;
use App\Http\Controllers\previousProjectController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\usersmanagementController;
use App\Http\Controllers\GroupController;
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

Route::prefix('admin')->group(function () {
    Route::get('/templates', [App\Http\Controllers\TemplatesController::class, 'index']);
    Route::post('/templates', [App\Http\Controllers\TemplatesController::class, 'store']);
    Route::delete('/templates/{id}', [App\Http\Controllers\TemplatesController::class, 'destroy']);
    Route::get('/users_management', [App\Http\Controllers\UsersManagementController::class, 'view_users_management']);
    Route::get('/users_management/{id}', [App\Http\Controllers\UsersManagementController::class, 'edit_user_page']);
    Route::put('/users_management/{id}', [App\Http\Controllers\UsersManagementController::class, 'update']);
    Route::delete('/users_management/{id}', [App\Http\Controllers\UsersManagementController::class, 'destroy']);
});

Route::prefix('supervisor')->group(function () {
    
});
Route::get('/templates/download/{id}', [App\Http\Controllers\TemplatesController::class, 'document_download']);



Route::get('/aboutus', [App\Http\Controllers\AboutusController::class, 'view_aboutus']);

Route::get('/previousProject', [App\Http\Controllers\previousProjectController::class, 'view_previousProject']);

Route::get('/projectDetiles', [App\Http\Controllers\previousProjectController::class, 'view_projectDetiles']);


Route::get('/subForProposal', [App\Http\Controllers\ProjectController::class, 'view_subForProposal']);

Route::get('/group', [App\Http\Controllers\GroupController::class, 'view_group']);

