<!DOCTYPE html>
<html>
<head>
    <title>GymStone</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <header>
        <h1>Welcome to GymStone Social Platform</h1>
    </header>
    <main>
        <div class="description">
            <h2>About Us</h2>
            <p>Our gym social platform is a community where fitness enthusiasts can connect, share their workouts, and find inspiration.</p>
        </div>
        <div class="links">
            <a href="{{ route('login') }}">Login</a>
            <a href="{{ route('register') }}">Register</a>
        </div>
        <div class="image">
            <img src="{{ asset('images/Gymstone_logo.png') }}" alt="GYMSTONE Logo">
        </div>
    </main>
</body>
</html>