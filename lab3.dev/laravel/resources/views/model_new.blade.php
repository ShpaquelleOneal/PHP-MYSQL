<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>New model in {{ $manufacturer->name }}</title>
</head>

<body>
    <h1>New model in {{ $manufacturer->name }}</h1>
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
    <a href="{{ route('models', [$manufacturer->id]) }}"><button>Go back</button></a>
    <form method="POST" action={{ action([App\Http\Controllers\CarmodelController::class, 'store'],['id' => $manufacturer->id]) }}>
        @csrf
        <ul>
            <li>
                <input type="hidden" name="man_id" value="{{ $manufacturer->id }}">
            </li>
            <li>
                <label for='name'>Model name</label>
                <input type="text" name="name" id="name" value="{{ old('name') }}">
            </li>
            <li>
                <label for='production_date'>Production starting date</label>
                <input type="text" name="production_date" id="production_date" value="{{ old('production_date') }}">
            </li>
            <li>
                <label for='starting_price'>Model starting price</label>
                <input type="text" name="starting_price" id="starting_price" value="{{ old('starting_price') }}">
            </li>
        </ul>
        <button type="submit" value="Add">Save</button>
    </form>
</body>
</html>