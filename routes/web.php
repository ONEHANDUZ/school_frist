<?php

use App\Http\Controllers\DownloadController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SchoolController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/home', [PageController::class, 'home'])->name('home');
Route::get('/news', [PageController::class, 'news'])->name('news');
Route::get('/needed', [PageController::class, 'needed'])->name('needed');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/download', [DownloadController::class, 'index'])->name('download');


Auth::routes();

Route::get('/profile', [HomeController::class, 'index'])->name('profile');

Route::resource('admin', SchoolController::class);