<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Manufacturers in {{$country->name}}</title>
</head>

<body>
    <h1>Manufacturers in {{$country->name}}</h1>
    @if (count($manufacturers) == 0)
        <p style="color: red;"> There are no records in the database!</p>
    @else
        <ul>

            @foreach ($manufacturers as $manufacturer)
                <li>
                   {{ $manufacturer->name }}
                </li>
            @endforeach
        </ul>
    @endif
</body>

</html>