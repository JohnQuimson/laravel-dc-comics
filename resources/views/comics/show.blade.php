@extends('layouts.app')

@section('header')
    <header class="header-show">
        <h1 class="text-warning text-center py-4">{{ $comic->title }}</h1>
    </header>
@endsection

@section('main')
    <main class="main-show">
        <div class="container">
            <div class="card mb-3">

                <div class="card-body">
                    <h5 class="card-title">series: {{ $comic->series }}</h5>
                    <p>{{ $comic->description }}</p>
                    <p class="text-body-secondary">type: {{ $comic->type }}</p>
                </div>
                {{-- <a href="{{ route('comics.update' )}}">edita</a> --}}
                <div class="btn-container d-flex justify-content-end gap-3">
                    <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-primary">Modifica</a>

                    {{-- Delete --}}
                    <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Cancella" class="btn btn-danger">
                    </form>
                </div>



            </div>
            <a href="{{ route('comics.index') }}">
                < torna alla lista</a>
        </div>
    </main>
@endsection
