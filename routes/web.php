<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin;

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

Route::get('/', function () {
    return view('pages.home');
});

Route::prefix('admin')->group(function(){
    Route::get('/',[Admin\Auth\LoginController::class,'loginform']);
    Route::get('/login',[Admin\Auth\LoginController::class,'loginform'])->name('admin.login');
    Route::post('/login',[Admin\Auth\LoginController::class,'login'])->name('admin.login');
    Route::get('/home',[Admin\HomeController::class, 'index'])->name('admin.home');
    Route::get('/sliderimg',[Admin\SliderImgController::class, 'slider'])->name('admin.sliderimg');
    Route::get('/sliderimg/create',[Admin\SliderImgController::class, 'create'])->name('admin.sliderimg.create');
    Route::post('/sliderimg/store',[Admin\SliderImgController::class, 'store'])->name('admin.sliderimg.store');
    Route::get('/logout',[Admin\Auth\LoginController::class,'logout'])->name('admin.logout');
});
