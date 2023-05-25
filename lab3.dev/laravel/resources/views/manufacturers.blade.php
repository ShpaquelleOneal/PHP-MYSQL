<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>Manufacturers in {{$country->name}}</title>
</head>

<body>
    <h1>Manufacturers in {{$country->name}}</h1>
    <a href="{{ url('/country') }}"><button>Go back</button></a>
    @if (count($manufacturers) == 0)
        <p style="color: red;"> There are no records in the database!</p>
    @else
        <ul>
            @foreach ($manufacturers as $manufacturer)
                <li>
                    <a href="{{ route('models', [$manufacturer->id]) }}">{{ $manufacturer->name }}</a>
                    {{ $manufacturer->founded }}
                    {{ $manufacturer->website }}
                    <a href="{{ route('manufacturer.edit', [$manufacturer->id])}}"><button value="">Edit</button></a>
                </li>
            @endforeach
        </ul>
    @endif
    <a href="{{ action([App\Http\Controllers\ManufacturerController::class, 'create'],['countryslug' => $country->code])}}"><button>Add new manufacturer</button></a>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
</body>

</html>