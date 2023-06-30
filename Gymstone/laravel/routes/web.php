<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\App;
use App\Models\Exercise;
use App\Models\History;
use App\Models\MuscleType;
use App\Http\Controllers\HistoryController;
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
            $user = Auth::user();
            return view('profile', compact('user'));
        })->name('profile');

        Route::post('/change-language', function (Illuminate\Http\Request $request) {
            $language = $request->input('language');
        
            // Validate the selected language or handle any additional logic
        
            App::setLocale($language);
        
            // Redirect the user back to the previous page or any desired location
            return back();
        })->name('change-language');

        Route::get('/history', function () {
            $user = Auth::user();
            $exercises = Exercise::all();
            $history = History::where('user_id', $user->id)->get(); // Retrieve history records for the authenticated user
            return view('history', compact('user', 'exercises', 'history'));
        })->name('history');

        Route::get('/history/new', function () {
            $user = Auth::user();
            $exercises = Exercise::all();
            $trainingId = History::max('training_id') + 1; // Generating a new training ID
            return view('history_new', compact('user', 'exercises', 'trainingId'));
        })->name('history.new');

        Route::post('/add-training', [HistoryController::class, 'store'])->name('add-training');
    
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