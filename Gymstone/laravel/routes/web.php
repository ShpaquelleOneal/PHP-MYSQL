<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('homepage');
});

// login / 
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
    ])->group(function () {
        Route::get('/dashboard', function () {
            $username = Auth::user()->name;
            $user = User::where('name', $username)->firstOrFail();
            return view('profile', compact('user'));
        })->name('profile');

        Route::get('/history', function () {
            $username = Auth::user()->name;
            $user = User::where('name', $username)->firstOrFail();
            return view('history', compact('user'));
        })->name('history');
    
        Route::get('/exercises', function () {
            $username = Auth::user()->name;
            $user = User::where('name', $username)->firstOrFail();
            return view('exercises', compact('user'));
        })->name('exercises');
});