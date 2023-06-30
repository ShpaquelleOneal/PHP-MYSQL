<!DOCTYPE html>
<html>
<head>
    <title>GymStone - Training History</title>
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
                    <li><a href="{{ route('profile') }}">Profile</a></li>
                    <li><a href="{{ route('exercises') }}">Exercises</a></li>
                    <li><a class="active" href="{{ route('history') }}">Training History</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section class="history">

        <h2>Training History</h2>
        <a href="{{ route('history.new') }}" class="add-training-btn"><h2>Add Training</h2></a>
        
        @if ($history->isEmpty())
            <p>No training history found.</p>
        @else
            @php
                $currentTrainingId = null;
                $reversedHistory = $history->reverse(); // Reverse the history collection
            @endphp

            <table class="training-table">
                <tr>
                    <th>Training Number</th>
                    <th>Exercise</th>
                    <th>Duration (hours)</th>
                </tr>

                @foreach($reversedHistory as $training)
                    @if ($currentTrainingId !== $training->training_id)
                        @php
                            $currentTrainingId = $training->training_id;
                            $exerciseCount = $reversedHistory->where('training_id', $currentTrainingId)->count();
                            $totalDuration = $reversedHistory->where('training_id', $currentTrainingId)->sum('duration');
                        @endphp

                        <tr>
                            <td colspan="1" class="training-id-row">
                                Training Number: {{ $currentTrainingId }} 
                            </td>
                            <td colspan="1" class="training-id-row">
                                Total Exercises: {{ $exerciseCount }}
                            </td>
                            <td colspan="1" class="training-id-row">
                                Total Duration: {{ $totalDuration }} hours
                            </td>
                        </tr>
                    @endif

                    <tr>
                        <td></td>
                        <td>{{ $training->exercise_name }}</td>
                        <td>{{ $training->duration }}</td>
                    </tr>
                @endforeach

            </table>
        @endif

    </section>
</body>
</html>