@extends('layouts.app')

@section('header')
    <h1 class="text-center py-5 text-uppercase ">Comics Laravel</h1>
@endsection

@section('main')
    <div class="main-comics-list">
        <div class="container text-center">
            <a href="{{ route('comics.create') }}">New</a>

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
                                        <h3 class="card-title">{{ $comic->title }}</h3>
                                        <p class="card-text fs-6">{{ $comic->description }}</p>
                                        <p>sale date: {{ $comic->sale_date }}</p>
                                        <span class="text-primary">{{ $comic->price }} $</span>
                                        <a href="{{ route('comics.show', $comic->id) }}">View Details</a>
                                    </div>
                                </div>
                            </div>

                            {{-- form --}}
                            <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                                @csrf

                                @method('DELETE')

                                <input type="submit" value="Cancella">
                            </form>
                            {{-- form --}}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
