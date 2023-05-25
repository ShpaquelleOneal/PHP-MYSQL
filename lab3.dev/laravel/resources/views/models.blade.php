<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>Car models for {{$manufacturer->name}}</title>
</head>
<body>
    <h1>Car models for {{$manufacturer->name}}</h1>
    <a href="{{ url('/country') }}"><button>< Countries</button></a>


    @if (count($carmodels) == 0)
        <p style="color: red;"> There are no records in the database!</p>
    @else
        <ul>
            @foreach ($carmodels as $carmodel)
                <li>
                    {{ $carmodel->name }} {{$carmodel->production_started}} {{$carmodel->min_price}}
                    <a href="{{ route('model.edit', ['id' => $carmodel->id])}}"><button value="">Edit</button></a>
                </li>
            @endforeach
        </ul>
    @endif
    <a href="{{ action([App\Http\Controllers\CarmodelController::class, 'create'],['id' => $manufacturer->id])}}"><button>New model</button></a>
</body>
</html>