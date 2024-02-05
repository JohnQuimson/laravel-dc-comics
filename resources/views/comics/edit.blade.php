@extends('layouts.app')

@section('header')
    <header class="header-edit">
        <h1 class="text-center py-5 text-uppercase">Edit Comic -> {{ $comic->title }}</h1>
    </header>
@endsection

@section('main')
    <main class="main-edit">
        <div class="container">
            <form action="{{ route('comics.update', $comic->id) }}" method="POST">
                @csrf

                {{-- method --}}
                @method('PUT')

                {{-- titolo --}}
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Titolo</label>
                    <input type="text" class="form-control" name="title" value="{{ $comic->title }}">
                </div>
                {{-- serie --}}
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Series</label>
                    <input type="text" class="form-control" name="series" value="{{ $comic->series }}">
                </div>
                {{-- data --}}
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Sale Date</label>
                    <input type="text" class="form-control" name="sale_date" value="{{ $comic->sale_date }}">
                </div>
                {{-- type --}}
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">type</label>
                    <input type="text" class="form-control" name="type" value="{{ $comic->type }}">
                </div>
                {{-- prezzo --}}
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Price</label>
                    <input type="number" class="form-control" name="price" value="{{ $comic->price }}">
                </div>
                {{-- immagine --}}
                <div class="mb-3">
                    <label class="form-label">Immagine</label>
                    <input type="text" class="form-control" name="thumb" value="{{ $comic->thumb }}">
                </div>
                {{-- descrizione --}}
                <div class="mb-3">
                    <label class="form-label">Description</label>
                    <textarea class="form-control" name="description" id="" cols="30" rows="10">{{ $comic->description }}</textarea>
                </div>
                <button type="submit" class="btn btn-success">Conferma modifica</button>
            </form>
            <div class="pt-5">
                <a href="{{ route('comics.index') }}">
                    < torna alla lista</a>
            </div>
        </div>
    </main>
@endsection
