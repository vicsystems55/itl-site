<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageController;

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

// Route::get('/', function () {
//     return view('home');
// });


Route::get('/', [PageController::class, 'home'])->name('home');

Route::get('/about', [PageController::class, 'about'])->name('about');

Route::get('/contact', [PageController::class, 'contact'])->name('contact');

Route::get('/services', [PageController::class, 'services'])->name('services');

Route::get('/store', [PageController::class, 'store'])->name('store');

Route::get('/blog', [PageController::class, 'blog'])->name('blog');

Route::get('/post', [PageController::class, 'post'])->name('post');

Route::get('/gallery', [PageController::class, 'gallery'])->name('gallery');