@extends('layouts.master')
@section('title', 'comic')

@section('comic-content')
    <section id="comic">
        <h2>{{ $comic['title'] }}</h2>
        <div class="general">
            <img src="{{ $comic['thumb'] }}" alt="">
            <div>
                <span>{{ $comic['series'] }}</span>
                <span>{{ $comic['type'] }}</span>
                <span>{{ $comic['price'] }}</span>
                <span>{{ $comic['sale_date'] }}</span>
            </div>
        </div>
        <p>{{ $comic['description'] }}</p>

        <a href="/comics">torna indietro</a>
    </section>
@endsection
