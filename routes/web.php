<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AuthentMiddleware;
use App\Http\Controllers\AdminController;

use App\Http\Controllers\GoogleLoginController;

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

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admindashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    // Add more admin routes as needed
});
Route::middleware(['auth', 'admin'])->group(function () {
    // Admin routes
});


Route::view('/clientdashboard', 'cdashboard');

Route::view('/admindashboard', 'adashboard');

Route::get('/signup', [AuthController::class, 'create'])->name('client.create');
Route::post('/signup', [AuthController::class, 'store'])->name('client.store');

Route::get('/event', function(){
    return view('event');
});
Route::get('/user', function(){
    return view('user');
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
Route::get('/event-details', function(){
    return view('event-details');
});



Route::get('/events', [EventController::class, 'index'])->name('events.index');
Route::get('/events/{id}', [EventController::class, 'show'])->name('events.show');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// GoogleLoginController redirect and callback urls
Route::get('/login/google', [GoogleLoginController::class, 'redirectToGoogle'])->name('auth.google');

Route::get('/login/google/callback', [GoogleLoginController::class, 'handleGoogleCallback']);


Route::get('/user', [EventController::class, 'index'])->name('user.index');
Route::get('/user/{id}', [UserController::class, 'show'])->name('user.show');
