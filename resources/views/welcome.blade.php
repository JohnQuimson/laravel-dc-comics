<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Template</title>

    {{-- import js & scss --}}
    @vite('resources/js/app.js')
</head>

<body>
    
        <h1 class="text-center pt-5"><a href="{{ route('comics.index') }}">clicca per accedere alla lista dei comics</a></h1>
        {{-- <img src="{{ Vite::asset('resources/img/logo.png') }}" alt=""> --}}
    
</body>

</html>