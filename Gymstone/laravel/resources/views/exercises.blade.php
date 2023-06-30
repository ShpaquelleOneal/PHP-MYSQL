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
                    <form action="{{ route('change-language') }}" method="POST" id="languageForm">
                        @csrf
                        <select name="language" onchange="this.form.submit()">
                            <option value="en" {{ app()->getLocale() === 'en' ? 'selected' : '' }}>ENG</option>
                            <option value="ru" {{ app()->getLocale() === 'ru' ? 'selected' : '' }}>RUS</option>
                        </select>
                    </form>
                </ul>
            </nav>
        </div>
    </header>

    <section class="exercises">

        <h2>All Exercises</h2>
        <div class="sort-buttons">
            <a href="{{ route('exercises') }}" class="sort-button"><button>All</button></a>
            @foreach($muscles as $muscle)
                <a href="{{ route('exercises', ['muscle_type_id' => $muscle->id]) }}" class="sort-button">
                    <button>{{ $muscle->muscle_name }}</button>
                </a>
            @endforeach
        </div>
        <table>
            <thead>
            <tr>
                <th>Exercise Name</th>
                <th>Muscle Type</th>
                <th>Description</th>
            </tr>
            </thead>
            <tbody>
            @foreach($exercises as $exercise)
                <tr>
                <td>{{ $exercise->exer_name }}</td>
                <td>{{ $exercise->muscleType->muscle_name }}</td>
                <td>{{ $exercise->exer_description }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </section>
</body>
</html>