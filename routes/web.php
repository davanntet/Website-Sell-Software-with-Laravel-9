<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FontendController;
use App\Http\Controllers\ProductController;
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

Route::redirect('_','/login')->name('login');
Route::get('/login', [AdminController::class, 'loginForm'])->name('admin.login.form');
Route::post('/login', [AdminController::class, 'loginPost'])->name('admin.login.post');
Route::get('/logout', [AdminController::class, 'logout'])->name('admin.logout');
Route::group(['middleware' => 'auth'], function () {
    Route::get('/category', function () {
        return view('Category.index');
    });
    Route::resource('/category',CategoryController::class);
    Route::resource('/product',ProductController::class);
    Route::get('/dashboard', [AdminController::class,'dashboard'])->name('admin.dashboard');
    Route::resource('/category',FontendController::class);

});
Route::get('/', FontendController::class);
Route::get('/', function () {
    return view('wellcome');
});