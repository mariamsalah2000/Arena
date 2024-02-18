<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
//Route::get('/',[HomeController::class,'home'])->name('home');
Route::get('/projects',[HomeController::class,'projects'])->name('projects');
Route::get('/categories',[HomeController::class,'categories'])->name('categories');
Route::get('/categories/{id}',[HomeController::class,'category'])->name('category');
Route::get('/projects/{id}',[HomeController::class,'project'])->name('project_details');
Route::get('/services',[HomeController::class,'services'])->name('services');
Route::get('/videos',[HomeController::class,'videos'])->name('videos');
Route::get('/contact-us',[HomeController::class,'contact'])->name('contact');
Route::post('/contact',[HomeController::class,'contactPost'])->name('contact.post');
Route::get('/collaborators',[HomeController::class,'collaborators'])->name('collaborators');