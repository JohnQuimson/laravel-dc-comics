@extends('layouts.app')

@section('header')
    <header class="header-comics-list">
        <h1 class="text-center py-5 text-uppercase ">Comics Laravel</h1>
    </header>
@endsection

@section('main')
    <main class="main-comics-list">
        <div class="container text-center">
            <a href="{{ route('comics.create') }}" class="btn btn-warning text-white">Add Comic</a>

            <div class="row pt-5">


                @foreach ($comics as $comic)
                    {{-- card --}}
                    <div class="col-12 col-md-6 col-xl-4">
                        <div class="card mb-3" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="{{ $comic->thumb }}" class="img-fluid rounded-start" alt="  {{ $comic->title }}">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h3 class="card-title fs-5">{{ $comic->title }}</h3>

                                        <p>sale date: {{ $comic->sale_date }}</p>
                                        <span class="text-primary fs-1">{{ $comic->price }} $</span>

                                        <div class="btn-container d-flex justify-content-around align-items-end">
                                            {{-- Details --}}
                                            <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-info">View Details</a>

                                            {{-- Delete --}}
                                            <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <input type="submit" value="Cancella" class="btn btn-danger">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
@endsection
