<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin;
use App\Http\Controllers\MasterController;



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

Route::get('/', 'App\Http\Controllers\Home\MasterController@index');
Route::get('/prestasi', 'App\Http\Controllers\Home\PrestasiController@index');
Route::get('/direktori', 'App\Http\Controllers\Home\DirektoriController@index');
Route::get('/ppdb', 'App\Http\Controllers\Home\PPDBController@index');

Route::prefix('admin')->group(function(){
    Route::get('/',[Admin\Auth\LoginController::class,'loginform']);
    Route::get('/login',[Admin\Auth\LoginController::class,'loginform'])->name('admin.login');
    Route::post('/login',[Admin\Auth\LoginController::class,'login'])->name('admin.login');
    Route::get('/home',[Admin\HomeController::class, 'index'])->name('admin.home');
    Route::get('/sliderimg',[Admin\SliderImgController::class, 'slider'])->name('admin.sliderimg');
    Route::get('/aboutstart',[Admin\AboutStartController::class, 'index'])->name('admin.aboutstart');
    //Slider Image
    Route::get('/sliderimg/create',[Admin\SliderImgController::class, 'create'])->name('admin.sliderimg.create');
    Route::post('/sliderimg/store',[Admin\SliderImgController::class, 'store'])->name('admin.sliderimg.store');
    Route::get('/sliderimg/edit/{id}',[Admin\SliderImgController::class, 'edit'])->name('admin.sliderimg.edit');
    Route::put('/sliderimg/update/{id}',[Admin\SliderImgController::class, 'update'])->name('admin.sliderimg.update');
    Route::get('/sliderimg/delete/{id}',[Admin\SliderImgController::class, 'destroy'])->name('admin.sliderimg.delete');

    //About start
    Route::get('/aboutstart/create',[Admin\AboutStartController::class, 'create'])->name('admin.aboutstart.create');
    Route::post('/aboutstart/store',[Admin\AboutStartController::class, 'store'])->name('admin.aboutstart.store');
    Route::get('/aboutstart/edit/{id}',[Admin\AboutStartController::class, 'edit'])->name('admin.aboutstart.edit');
    Route::put('/aboutstart/update/{id}',[Admin\AboutStartController::class, 'update'])->name('admin.aboutstart.update');
    Route::get('/aboutstart/delete/{id}',[Admin\AboutStartController::class, 'destroy'])->name('admin.aboutstart.delete');
    
    //Keluar Admin
    Route::get('/logout',[Admin\Auth\LoginController::class,'logout'])->name('admin.logout');
});
