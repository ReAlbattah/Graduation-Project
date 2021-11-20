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
    Route::get('/groups', [App\Http\Controllers\GroupController::class, 'list_groups']);
    Route::get('/templates', [App\Http\Controllers\TemplatesController::class, 'index']);
    Route::post('/templates', [App\Http\Controllers\TemplatesController::class, 'store']);
    Route::delete('/templates/{id}', [App\Http\Controllers\TemplatesController::class, 'destroy']);
    Route::get('/users_management', [App\Http\Controllers\UsersManagementController::class, 'view_users_management']);
    Route::get('/users_management/{id}', [App\Http\Controllers\UsersManagementController::class, 'edit_user_page']);
    Route::put('/users_management/{id}', [App\Http\Controllers\UsersManagementController::class, 'update']);
    Route::delete('/users_management/{id}', [App\Http\Controllers\UsersManagementController::class, 'destroy']);
});

Route::prefix('supervisor')->group(function () {
    Route::get('/groups', [App\Http\Controllers\GroupController::class, 'view_group']);
    Route::post('/create_groups', [App\Http\Controllers\GroupController::class, 'create_group']);
    Route::get('/display_groups', [App\Http\Controllers\GroupController::class, 'supervisor_groups']);
    Route::post('/create_project', [App\Http\Controllers\ProjectController::class, 'create_project']);



});
Route::get('/templates/download/{id}', [App\Http\Controllers\TemplatesController::class, 'document_download']);



Route::get('/aboutus', [App\Http\Controllers\AboutusController::class, 'view_aboutus']);

Route::get('/previousProject', [App\Http\Controllers\ProjectController::class, 'view_previousProject']);

Route::get('/project_detiles/{id}', [App\Http\Controllers\ProjectController::class, 'view_project_detiles']);


Route::get('/project', [App\Http\Controllers\ProjectController::class, 'view_project']);

Route::get('/group', [App\Http\Controllers\GroupController::class, 'view_group']);

