<!DOCTYPE html>
<html>
<head>
    <title>GymStone</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }

        header {
            background-color: indigo;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        h1 {
            margin: 0;
            font-size: 28px;
        }

        main {
            padding: 20px;
            text-align: center;
        }

        .description {
            margin-bottom: 30px;
        }

        .description h2 {
            font-size: 24px;
            margin-bottom: 10px;
        }

        .description p {
            font-size: 16px;
            margin-bottom: 20px;
        }

        .links {
            display: flex;
            justify-content: center;
        }

        .links a {
            margin: 0 10px;
            padding: 10px 20px;
            background-color: indigo;
            color: #fff;
            text-decoration: none;
            border-radius: 3px;
        }

        .links a:hover {
            background-color: rgb(46, 0, 79);
        }
    </style>
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
    </main>
</body>
</html>