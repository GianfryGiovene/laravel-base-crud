@extends('layouts.master')
@section('title', 'comic')
{{-- COMIC DETAIL SECTION --}}
@section('comic-content')
    <section id="comic-detail">
        <div class="container">
            <h2>{{ $comic['title'] }}</h2>
            <div class="general">
                <img src="{{ $comic['thumb'] }}" alt="">
                <div class="info">
                    <span>Serie: {{ $comic['series'] }}</span>
                    <span>Tipo fumetto: {{ $comic['type'] }}</span>
                    <span>Prezzo: {{ $comic['price'] }}</span>
                    <span>Data uscita: {{ $comic['sale_date'] }}</span>
                </div>
            </div>
            <h4>Trama:</h4>
            <p>{{ $comic['description'] }}</p>

            <a href="/comics">torna indietro</a>
        </div>
    </section>
@endsection
