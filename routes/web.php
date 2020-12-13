<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\blogPostController;

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
Route::get('/', [Controller::class, 'getData']);

Route::get('contact-us', function () {
    return view('contact');
});

Route::post('contact-us', [ContactController::class, 'saveContact']);

Route::get('blog-post', function () {
    return view('blogPost');
});

Route::post('blog-post', [blogPostController::class, 'savePost']);

Route::get('login', function() {
    return view('login');
});

Auth::routes();

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia\Inertia::render('Dashboard');
})->name('dashboard');
