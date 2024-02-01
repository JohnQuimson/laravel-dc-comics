<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Creation Comic</title>

  {{-- import js & scss --}}
    @vite('resources/js/app.js')
</head>
<body class="text-white">
  <h1 class="text-center py-5 text-uppercase text-warning">New Comic</h1>

  <div class="container">
    <form action="{{ route('comics.store') }}" method="POST">
      @csrf

      {{-- titolo --}}
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Titolo</label>
        <input type="text" class="form-control" name="title">
      </div>
      {{-- serie --}}
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Series</label>
        <input type="text" class="form-control" name="series">
      </div>
      {{-- data --}}
      <div class="mb-3">
        <label class="active" for="dateStandard">Sale Date</label>
        <input type="text"  name="sale_date">
      </div>
      {{-- type --}}
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">type</label>
        <input type="text" class="form-control" name="type">
      </div>
      {{-- prezzo --}}
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Price</label>
        <input type="number" class="form-control" name="price">
      </div>
      {{-- immagine --}}
      <div class="mb-3">
        <label class="form-label">Immagine</label>
        <input type="text" class="form-control" name="thumb">
      </div>
      {{-- descrizione --}}
      <div class="mb-3">
        <label class="form-label">Description</label>
        <textarea class="form-control" name="description" id="" cols="30" rows="10" ></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <div class="pt-5">     
      <a href="{{ route('comics.index') }}">< torna alla lista</a>
    </div>
  </div>
</body>
</html>