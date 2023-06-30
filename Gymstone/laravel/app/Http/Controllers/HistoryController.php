<?php

namespace App\Http\Controllers;

use App\Models\History;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class HistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
        $user = Auth::user();
        $trainingHistory = History::where('user_id', $user->id)->get();

    return view('history.index', compact('user', 'trainingHistory'));
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $user = Auth::user();
            $trainingIds = $request->input('training_id');
            $exerciseIds = $request->input('exercise_id');
            $durations = $request->input('duration');
    
            foreach ($exerciseIds as $key => $exerciseId) {
                $history = new History();
                $history->training_id = intval($trainingIds[$key]); // Convert training ID to int
                $history->user_id = $user->id;
                $history->exercise_id = $exerciseId;
                $history->duration = ($durations[$key] !== null && $durations[$key] !== '') ? (float) $durations[$key] : 0; // Convert to float and set 0 if null or blank
                $history->save();
            }
    
            return redirect()->route('history')->with('success', 'Training records added successfully.');
        } catch (\Exception $e) {
            // Log the error message
            error_log($e->getMessage());
            // Redirect back with an error message
            return redirect()->back()->with('error', 'An error occurred while storing the training records.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
