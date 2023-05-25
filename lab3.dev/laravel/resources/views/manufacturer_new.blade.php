<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>New manufacturer in {{ $country->name }}</title>
</head>

<body>
    <h1>New manufacturer in {{ $country->name }}</h1>
    <!-- Add this section to display validation errors -->
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li style="color: red;">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form method="POST" action={{ action([App\Http\Controllers\ManufacturerController::class, 'store']) }}>
        @csrf
        <ul>
            <li>
                <input type="hidden" name="country_id" value="{{ $country->id }}">
            </li>
            <li>
                <label for='name'>Manufacturer name</label>
                <input type="text" name="name" id="name" value="{{ old('name') }}">
            </li>
            <li>
                <label for='founded'>Founded year</label>
                <input type="text" name="founded" id="founded" value="{{ old('founded') }}">
            </li>
            <li>
                <label for='website'>Website</label>
                <input type="text" name="website" id="website" value="{{ old('website') }}">
            </li>
        </ul>
        <button type="submit" value="Add">Save</button>
    </form>
</body>
</html>