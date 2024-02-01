<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Comics Laravel</title>

  {{-- import js & scss --}}
    @vite('resources/js/app.js')
</head>
<body>
  <h1 class="text-center py-5 text-uppercase text-white">Comics Laravel</h1>
  <div class="container text-center">
    <div class="row">

    
    @foreach ($comics as $comic)
    {{-- card --}}
    <div class="col-12 col-md-6 col-xl-4">
      <div class="card mb-3" style="max-width: 540px;">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="{{ $comic->thumb }}" class="img-fluid rounded-start" alt="{{ $comic->title }}">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h3 class="card-title">{{ $comic->title }}</h3>
            <p class="card-text fs-6">{{ $comic->description }}</p>
            <p>sale date: {{ $comic->sale_date }}</p>
            <span class="text-primary">{{ $comic->price }} $</span>
            <a href="{{ route('comics.show', $comic->id )}}">View Details</a>
          </div>
        </div>
      </div>
    </div>
  </div>
    
    @endforeach
    </div>
    </div>
</body>
</html>