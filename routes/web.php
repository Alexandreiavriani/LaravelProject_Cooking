<?php

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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/test1', function () {
//     return view('example');
// });

Route::get('/test1', function () {
    return view('example', ['name' => "Alex"]);
});

Route::get('/test1_2/{name}', function ($name) {
    return view('example', ['name' => $name]);
});

if (View::exists('example')) {
    //

}

Route::get('/test2', function () {
    return view('example2')
            ->with('name', 'Victoria')
            ->with('Age', 24);
});

Route::get('/test3', function ($name) {
    return view('example2')
            ->with('name', 'Victoria')
            ->with('Age', 24);
});