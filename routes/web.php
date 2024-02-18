<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\HomeController;

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
/* ================== Admin Routes ================== */
Route::get('/', function () {
    return redirect()->route('index',Session::get('lang','en'));
});
Route::get('/', [HomeController::class,'index'])->name('index');
Route::get('/about-us', [HomeController::class,'about'])->name('about-us');
Route::get('/blog', [HomeController::class,'blog'])->name('blog');
Route::get('/market-place', [HomeController::class,'marketplace'])->name('marketplace');
Route::get('/partners', [HomeController::class,'partners'])->name('partners');
Route::get('/success-stories', [HomeController::class,'success_stories'])->name('success-stories');
Route::get('/blog/details', [HomeController::class,'blog_details'])->name('blog-details');
Route::get('/careers', [HomeController::class,'careers'])->name('careers');
Route::get('/creative-services', [HomeController::class,'creative_services'])->name('creative-services');
Route::get('/platforms/{slug}', [HomeController::class,'platform'])->name('platforms');
Route::get('/projects', [HomeController::class,'projects'])->name('projects');
Route::get('/projects/{slug}', [HomeController::class,'project'])->name('project_details');
Route::get('/industries', [HomeController::class,'industries'])->name('industries');
Route::get('/contact-us', [HomeController::class,'contact'])->name('contact-us');
Route::post('/contact', [HomeController::class,'contact_post'])->name('contact_post');

