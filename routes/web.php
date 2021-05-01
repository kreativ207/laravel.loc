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

Route::get('hello', function (){
    return view('hello', [
        'name' => 'Nikolay',
        'lastName' => 'Old',
        'skills' => ['HTML5', 'CSS3', 'VUE.js', 'laravel']
    ]);
    // view -> $name => Nikolay, $lastName => Old
});

Route::get('test', function (){
    return view('test');
});



Route::get('/first-page', function (){
    return "<h1 style='font-family: Arial;'>This is my first page in Laravel</h1>";
});

Route::get('/post/{id}', function ($id){
    return "Post ID - $id";
});
