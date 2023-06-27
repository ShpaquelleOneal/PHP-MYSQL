<!DOCTYPE html>
<html>
<head>
    <title>GymStone - Exercises</title>
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
                    <li><a class="active" href="{{ route('exercises') }}">Exercises</a></li>
                    <li><a href="{{ route('history') }}">Training History</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section class="exercises">

        <h2>All Exercises</h2>
        <ul class="training-plans">
            <li>.</li>
            <li>.</li>
            <li>.</li>
        </ul>

    </section>
</body>
</html>