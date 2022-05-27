@extends('layouts.master')
@section('title', 'edit comic')
{{-- COMIC DETAIL SECTION --}}
@section('comics-content')
    <form action="{{ route('comics.update', $comic->id) }}" method="post">
        @csrf
        @method('put')
        <div>
            <label for="title">Insert title: </label>
            <input type="text" name="title" value="{{ $comic->title }}" />
        </div>

        <div>
            <label for="description">Insert description: </label>
            <input type="text" name="description" value="{{ $comic->description }}" />
        </div>


        <div>
            <label for="thumb">Insert img URL: </label>
            <input type="url" name="thumb" value="{{ $comic->thumb }}" />
        </div>
        <div>
            <label for="price">Insert price: </label>
            <input type="text" name="price" value="{{ $comic->price }}" />
        </div>

        <div>
            <label for="series">Insert series: </label>
            <input type="text" name="series" value="{{ $comic->series }}" />
        </div>
        <div>

            <label for="sale_date">Insert sale date: </label>
            <input type="date" name="sale_date" value="{{ $comic->sale_date }}" />
        </div>

        <div>
            <label for="type">Insert type: </label>
            <input type="text" name="type" value="{{ $comic->type }}" />
        </div>

        <button type="submit">Add</button>
    </form>
@endsection
