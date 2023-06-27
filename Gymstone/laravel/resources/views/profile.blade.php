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
                <img src="gymstone-logo.png" alt="GYMSTONE Logo" class="logo">
                <h1 class="logo-text">GYMSTONE</h1>
            </div>
            <nav>
                <ul>
                    <li><a class="active" href="#">User Name</a></li>
                    <li><a href="#">Training Plans</a></li>
                    <li><a href="#">Training History</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section class="profile">
        <h1>Welcome to My Gym Profile!</h1>
        <div class="profile-info">
            <img src="profile-pic.jpg" alt="Profile Picture">
            <div class="info">
                <h2>User Name</h2>
                <p><strong>Age:</strong> 25</p>
                <p><strong>Location:</strong> City, Country</p>
                <p><strong>Bio:</strong> I'm passionate about fitness and living a healthy lifestyle. I enjoy weightlifting, HIIT workouts, and yoga. Looking forward to connecting with fellow fitness enthusiasts!</p>
            </div>
        </div>

        <h2>Training Plans</h2>
        <ul class="training-plans">
            <li>Full-Body Strength Training</li>
            <li>HIIT Cardio Blast</li>
            <li>Yoga for Flexibility</li>
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