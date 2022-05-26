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
                    <span>Series: {{ $comic['series'] }}</span>
                    <span>Type: {{ $comic['type'] }}</span>
                    <span>Price: {{ $comic['price'] }}</span>
                    <span>Sale date: {{ $comic['sale_date'] }}</span>
                </div>
            </div>
            <h4>Description:</h4>
            <p>{{ $comic['description'] }}</p>

            <a href="/comics">Back</a>
        </div>
    </section>
@endsection
