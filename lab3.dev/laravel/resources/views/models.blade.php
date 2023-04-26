<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Car models for {{$manufacturer->name}}</title>
</head>
<body>
    <h1>Car models for {{$manufacturer->name}}</h1>
    @if (count($carmodels) == 0)
        <p style="color: red;"> There are no records in the database!</p>
    @else
        <ul>
            @foreach ($carmodels as $carmodel)
                <li>
                    {{ $carmodel->name }}
                </li>
            @endforeach
        </ul>
        
    @endif
</body>
</html>