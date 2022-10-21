<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController; 
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

// home page  
Route::prefix('/home') -> group( function () {
    Route::get('', [HomeController::class, 'index']);
});

Route::get('/', function () {
    return view('welcomeeee');
});

Route::prefix('/test') -> group( function () {
    Route::get('', function () {
        return "Test";
    });
});

Route::get('/lolikun', function() {
    return "ok";
});
