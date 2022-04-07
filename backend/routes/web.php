<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserViewController;

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

Route::get('/welcome', 'InternController@index');

Route::get('/about', [UserViewController::class, 'about'])->name('user.about');
Route::get('/career', [UserViewController::class, 'career'])->name('user.career');
Route::get('/contact', [UserViewController::class, 'contact'])->name('user.contact');
Route::get('/news', [UserViewController::class, 'news'])->name('user.news');
Route::get('/our_works', [UserViewController::class, 'our_works'])->name('user.our_work');