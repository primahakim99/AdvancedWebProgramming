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
//Practicum 1
Route::get('/', function () {
    echo "Hi! Welcome To Laravel"; 
});

Route::get('/about', function () {
    echo "Fahreza Prima Hakim<br>"; 
    echo "2041720242<br>"; 
    echo "TI - 2I"; 
});

Route::get('/about/{id}', function ($id) {
    echo "This is Article Pages with ID: " .$id; 
});