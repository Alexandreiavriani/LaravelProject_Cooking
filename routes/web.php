<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\GeorgiasController;
use App\Http\Controllers\ItaliesController;
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

Route::get('/',[PagesController::class,'index']);
Route::get('/dishes',[PagesController::class,'dishes']);


Route::get('/china',[PostsController::class,'index']);


Route::post('/china',[PostsController::class,'store']);


Route::get('/chinaCreate',[PostsController::class,'create']);
Route::get('/Chinaedit/{id}',[PostsController::class,'edit']);

Route::post('updateChina',[PostsController::class,'updateChina'])->name('update1');

Route::get('/Chinadelete/{id}',[PostsController::class,'Chinadelete']);





//Georgia

Route::get('/georgia',[GeorgiasController::class,'index']);
Route::post('/georgia',[GeorgiasController::class,'store']);
Route::get('/georgiaCreate',[GeorgiasController::class,'create']);
Route::get('/Georgiaedit/{id}',[GeorgiasController::class,'edit']);
Route::post('updateGeorgia',[GeorgiasController::class,'updateGeorgia'])->name('update2');
Route::get('/Georgiadelete/{id}',[GeorgiasController::class,'Georgiadelete']);

//Italy

Route::get('/italy',[ItaliesController::class,'index']);
Route::post('/italy',[ItaliesController::class,'store']);
Route::get('/italyCreate',[ItaliesController::class,'create']);
Route::get('/Italyedit/{id}',[ItaliesController::class,'edit']);
Route::post('updateItaly',[ItaliesController::class,'updateItaly'])->name('update3');
Route::get('/Italydelete/{id}',[ItaliesController::class,'Italydelete']);


Route::get('/about', function () {
    return view('layouts.about');
});




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
