<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Laravel Template</title>

        {{-- import js & scss --}}
        @vite('resources/js/app.js')
    </head>

    <body class="welcome">

        <h1 class="text-center pt-5">
            <a href="{{ route('comics.index') }}" class="btn btn-primary">Comics list</a>
        </h1>
        <p class="text-center pt-5">Click the <span>button</span> to see all comics</p>


        {{-- <img src="{{ Vite::asset('resources/img/logo.png') }}" alt=""> --}}

    </body>

</html>
