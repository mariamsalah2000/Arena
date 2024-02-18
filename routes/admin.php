<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\IndustryController;
use App\Http\Controllers\Admin\PlatformController;
use App\Http\Controllers\Admin\AccessoryController;
use App\Http\Controllers\Admin\PlatformDetailController;

Route::get('/', function () {
    return redirect('/admin/en/');
});
Route::get('/en/', function () {
    return redirect()->route('admin.dashboard');
});
Route::group(['middleware' => ['auth'],'prefix'=>'en'], function(){
    Route::get('/dashboard',[AdminController::class,'dashboard'])->name('admin.dashboard');
    Route::resource('platforms', PlatformController::class);
    Route::resource('platform_details', PlatformDetailController::class);
    Route::resource('industries', IndustryController::class);
    Route::resource('projects', ProjectController::class);
    Route::resource('blog', BlogController::class);
    Route::get('category/{id}/destroy',[CategoryController::class,'destroy'])->name('categories.destroy');
    Route::get('projects/{id}/destroy',[ProjectController::class,'destroy'])->name('projects.destroy');
    Route::get('accessories/{id}/destroy',[AccessoryController::class,'destroy'])->name('accessories.destroy');
    Route::get('contact-requests',[AdminController::class,'contactRequests'])->name('contact_requests');
    Route::get('contact-requests/{id}',[AdminController::class,'contactRequest'])->name('contact_request');
    Route::get('contact-requests/{id}/destroy',[AdminController::class,'destroyContactRequest'])->name('requests.destroy');
});
Route::get('login',[LoginController::class,'showLoginForm'])->name('admin.login');
Route::post('login',[LoginController::class,'login'])->name('admin.login.post');
