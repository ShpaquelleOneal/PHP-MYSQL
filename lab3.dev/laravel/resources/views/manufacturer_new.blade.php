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
    <form method="POST" action={{ action([App\Http\Controllers\ManufacturerController::class, 'store']) }}>
        @csrf
        <input type="hidden" name="country_id" value="{{ $country->id }}">

        <label for='manufacturer_name'>Manufacturer name</label>
        <input type="text" name="manufacturer_name" id="manufacturer_name">

        <label for='manufacturer_founded'>Founded year</label>
        <input type="text" name="manufacturer_founded" id="manufacturer_founded">

        <label for='manufacturer_website'>Website</label>
        <input type="text" name="manufacturer_website" id="manufacturer_website">
        
        <button type="submit" value="Add">Save</button>
    </form>
</body>
</html>