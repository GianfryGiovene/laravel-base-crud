@extends('layouts.master')
@section('title', 'comics')

@section('comics-content')
    <main>
        <div>
            @forelse ($comics as $comic)
                <div class="card">
                    <a href="{{ route('comics.show', $comic->id) }}">
                        <img src="{{ $comic['thumb'] }}" alt="">
                        <h3>{{ $comic['title'] }}</h3>
                        <div>
                            <span>tipo: {{ $comic['type'] }}</span>
                            <br>
                            <span>prezzo: {{ $comic['price'] }}€</span>
                        </div>
                    </a>
                </div>
            @empty
                <p>Non ci sono fumetti da visualizzare</p>
            @endforelse

        </div>
    </main>
@endsection
