<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProgramController;
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
//     return view('welcome');
// });

Auth::routes();
//home
Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);

Route::prefix('program')->group(function () {
    Route::get('{slug}',[ProgramController::class, 'index']);
});

Route::prefix('product')->group(function () {
    Route::get('{slug}',[ProductController::class, 'index']);
});

Route::get('/news/{slug}', [NewsController::class, 'index']);

Route::get('/about-us',[AboutUsController::class, 'index']);

Route::resource('contact-us', ContactUsController::class);