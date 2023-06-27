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

    <section class="profile">
        <h1>Welcome back to Gymstone!</h1>
        <div class="profile-info">
            <div class="info">
                <h2></h2>
            </div>
        </div>

        <h2>Favorite Exercises</h2>
        <ul class="training-plans">
            <li>.</li>
            <li>.</li>
            <li>.</li>
        </ul>

        <h2>Training History</h2>
        <table class="training-history">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Exercise</th>
                    <th>Sets</th>
                    <th>Reps</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>2023-06-01</td>
                    <td>Bench Press</td>
                    <td>3</td>
                    <td>10</td>
                </tr>
                <tr>
                    <td>2023-06-03</td>
                    <td>Squats</td>
                    <td>4</td>
                    <td>8</td>
                </tr>
                <tr>
                    <td>2023-06-05</td>
                    <td>Deadlifts</td>
                    <td>3</td>
                    <td>12</td>
                </tr>
            </tbody>
        </table>
    </section>
</body>
</html>