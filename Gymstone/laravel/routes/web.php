<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Exercise;
use App\Models\MuscleType;
use Illuminate\Http\Request;
use App\Http\Controllers\ExerciseController;

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
    
        Route::get('/exercises', function (Request $request) {
            $user = Auth::user();
            $muscleTypeId = $request->query('muscle_type_id');
        
            // Retrieve the exercises based on the muscle type ID if provided
            if ($muscleTypeId) {
                $exercises = Exercise::where('muscle_type_id', $muscleTypeId)->get();
            } else {
                $exercises = Exercise::all();
            }
        
            $muscles = MuscleType::all();
        
            return view('exercises', compact('exercises', 'user', 'muscles'));
        })->name('exercises');
    }
);