@extends('layouts.app')

@section('header')
    <h1 class="text-warning text-center py-4">{{ $comic->title }}</h1>
@endsection

@section('main')
    <div class="container">
        <div class="card mb-3">

            <div class="card-body">
                <h5 class="card-title">{{ $comic->series }}</h5>
                <p>{{ $comic->description }}</p>
                <p class="text-body-secondary">type: {{ $comic->type }}</p>
            </div>
            {{-- <a href="{{ route('comics.update' )}}">edita</a> --}}
            {{-- form --}}
            <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                @csrf

                @method('DELETE')

                <input type="submit" value="Cancella">
            </form>
            {{-- form --}}

            <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-primary">Modifica</a>

        </div>
        <a href="{{ route('comics.index') }}">
            < torna alla lista</a>
    </div>
@endsection
