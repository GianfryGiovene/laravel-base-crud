@extends('layouts.master')
@section('title', 'comics')

@section('comics-content')
    <section id="comics">
        <div class="container">
            <div id="comics-container">
                @forelse ($comics as $comic)
                    <div class="card">
                        <a href="{{ route('comics.show', $comic->id) }}">
                            <div class="thumb">
                                <img src="{{ $comic['thumb'] }}" alt="">
                            </div>
                            <h3>{{ $comic['title'] }}</h3>
                            <div class="info">
                                <span>tipo: {{ $comic['type'] }}</span>
                                <span>prezzo: {{ $comic['price'] }}€</span>
                            </div>
                        </a>
                    </div>
                @empty
                    <p>Non ci sono fumetti da visualizzare</p>
                @endforelse
            </div>
            <a href="/">Back</a>
        </div>
    </section>
@endsection
