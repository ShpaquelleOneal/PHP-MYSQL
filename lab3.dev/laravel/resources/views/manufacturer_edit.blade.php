<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
  <title>Editing manufacturer {{ $manufacturer->name }}</title>
</head>

<body>
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
  <h1>Editing manufacturer {{ $manufacturer->name }}</h1>
  <form method="POST"
      action={{ action([App\Http\Controllers\ManufacturerController::class, 'update'], [ 'manufacturer' => $manufacturer]) }}>
      @csrf
      @method('put')
      <label for='manufacturer_name'>Manufacturer name</label>
      <input type="text" name="manufacturer_name" id="manufacturer_name" value="{{ $manufacturer->name }}">

      <label for='manufacturer_founded'>Founded year</label>
      <input type="text" name="manufacturer_founded" id="manufacturer_founded" value="{{ $manufacturer->founded }}">

      <label for='manufacturer_website'>Website</label>
      <input type="text" name="manufacturer_website" id="manufacturer_website" value="{{ $manufacturer->website }}">

      <button type="submit" value="Update">Save changes</button>
  </form>
</body>

</html>