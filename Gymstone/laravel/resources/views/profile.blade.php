<?php

use App\Models\User;
use App\Models\History;
use App\Models\Exercise;

?>

<!DOCTYPE html>
<html>
<head>
    <title>GymStone - Profile</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <header>
        <div class="top-bar">
            <div class="logo-container">
                <img src="{{ asset('images/Gymstone_logo.png') }}" alt="GYMSTONE Logo" class="logo">
                <a href="{{ route('profile') }}" class='logo-text'><h1>GYMSTONE - {{$user->name}}</h1></a>
            </div>
            <nav>
                <ul>
                    <li><a class="active" href="{{ route('profile') }}">Profile</a></li>
                    <li><a href="{{ route('exercises') }}">Exercises</a></li>
                    <li><a href="{{ route('history') }}">Training History</a></li>
                </ul>
            </nav>
        </div>
    </header>

        <h2>Favorite Exercises</h2>
    @php
        $favoriteExercises = $user->history()
            ->with('exercise')
            ->select('exercise_id', DB::raw('COUNT(*) as count'))
            ->groupBy('exercise_id')
            ->orderByDesc('count')
            ->take(3)
            ->get();
    @endphp

    @if ($favoriteExercises->isNotEmpty())
        <ul class="training-plans">
            @foreach($favoriteExercises as $favoriteExercise)
                <li>{{ $favoriteExercise->exercise->name }}</li>
            @endforeach
        </ul>
    @else
        <p>No favorite exercises found.</p>
    @endif
</body>
</html>