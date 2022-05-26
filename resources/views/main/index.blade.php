@extends('layouts.master')
@section('title', 'comics')

@section('comics-content')
    {{-- COMIC CARDS SECTION --}}
    <section id="comics">
        <div class="container">
            <div id="comics-container">
                {{-- cards cycle --}}
                @forelse ($comics as $comic)
                    <div class="card">
                        <a href="{{ route('comics.show', $comic->id) }}">
                            <div class="thumb">
                                <img src="{{ $comic['thumb'] }}" alt="">
                            </div>
                            <h3>{{ $comic['title'] }}</h3>
                            <div class="info">
                                <span>type: {{ $comic['type'] }}</span>
                                <span>price: {{ $comic['price'] }}€</span>
                            </div>
                        </a>
                    </div>
                @empty
                    <p>There aren't comics to show</p>
                @endforelse
            </div>
            <a href="/">Back</a>
            <div id="add-comics">
                <a href="comics/create">Add Comic</a>
            </div>
        </div>
    </section>
@endsection
