@extends('layouts.app')

@section('header')
    <header class="header-create">
        <h1 class="text-center py-5 text-uppercase ">New Comic</h1>
    </header>
@endsection

@section('main')
    <main class="main-create">
        <div class="container">
            <form action="{{ route('comics.store') }}" method="POST">
                @csrf

                {{-- titolo --}}
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Titolo</label>
                    <input type="text" class="form-control" name="title">
                </div>

                {{-- CONTENITORE 1 --}}
                <div class="cont-1 d-flex justify-content-around">
                    {{-- serie --}}
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Series</label>
                        <input type="text" class="form-control" name="series">
                    </div>
                    {{-- type --}}
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">type</label>
                        <input type="text" class="form-control" name="type">
                    </div>
                </div>

                {{-- CONTENITORE 2 --}}
                <div class="cont-2 d-flex justify-content-around">
                    {{-- data --}}
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Sale date</label>
                        <input type="text" class="form-control" name="sale_date">
                    </div>

                    {{-- prezzo --}}
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Price</label>
                        <input type="number" class="form-control" name="price">
                    </div>
                </div>


                {{-- immagine --}}
                <div class="mb-3">
                    <label class="form-label">Immagine</label>
                    <input type="text" class="form-control" name="thumb">
                </div>
                {{-- descrizione --}}
                <div class="mb-3">
                    <label class="form-label">Description</label>
                    <textarea class="form-control" name="description" id="" cols="30" rows="10"></textarea>
                </div>
                <button type="submit" class="btn btn-success">Crea</button>
            </form>
            <div class="pt-5">
                <a href="{{ route('comics.index') }}">
                    < torna alla lista</a>
            </div>
        </div>
    </main>
@endsection
