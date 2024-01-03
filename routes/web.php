<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AuthentMiddleware;

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

// Login routes

Route::view('/login', 'login');




Route::post('/authenticate', function () {
    return view('/clientdashboard', 'cdashboard');
})->middleware('authent');




Route::view('/clientdashboard', 'cdashboard');

Route::view('/admindashboard', 'adashboard');

Route::get('/signup', [AuthController::class, 'create'])->name('client.create');
Route::post('/signup', [AuthController::class, 'store'])->name('client.store');

Route::get('/blog', function(){
    return view('blog');
});
Route::get('/about', function(){
    return view('about');
});
Route::get('/contact', function(){
    return view('contact');
});
Route::get('/team', function(){
    return view('team');
});
Route::get('/blog', function(){
    return view('blog');
});
Route::get('/blog', function(){
    return view('blog');
});
Route::get('/blog', function(){
    return view('blog');
});
