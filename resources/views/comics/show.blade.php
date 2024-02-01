<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Details Comic</title>

  {{-- import js & scss --}}
    @vite('resources/js/app.js')
</head>
<body>
  <h1 class="text-warning text-center py-4">{{ $comic->title }}</h1>

  <div class="container">
    <div class="card mb-3">
  
      <div class="card-body">
        <h5 class="card-title">{{ $comic->series }}</h5>
        <p >{{ $comic->description }}</p>
        <p class="text-body-secondary">type: {{ $comic->type }}</p>
      </div>
    </div>
    <a href="{{ route('comics.index') }}">< torna alla lista</a>
  </div>

</body>
</html>