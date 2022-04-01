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


Route::get('/', [PageController::class, 'home']);

Route::get('/about', [PageController::class, 'about']);

Route::get('/contact', [PageController::class, 'contact']);

Route::get('/services', [PageController::class, 'services']);

Route::get('/store', [PageController::class, 'store']);

Route::get('/blog', [PageController::class, 'blog']);

Route::get('/post', [PageController::class, 'post']);

Route::get('/gallery', [PageController::class, 'gallery']);