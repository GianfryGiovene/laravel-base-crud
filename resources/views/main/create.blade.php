@extends('layouts.master')
@section('title', 'add comic')
{{-- COMIC DETAIL SECTION --}}
@section('add-comic')
    <form action="{{ route('comics.store') }}" method="post">
        @csrf
        <div>
            <label for="title">Insert title: </label>
            <input type="text" name="title" />
        </div>

        <div>
            <label for="description">Insert description: </label>
            <input type="text" name="description" />
        </div>


        <div>
            <label for="thumb">Insert img URL: </label>
            <input type="text" name="thumb" />
        </div>

        <div>
            <label for="price">Insert price: </label>
            <input type="text" name="price" />
        </div>

        <div>
            <label for="series">Insert series: </label>
            <input type="text" name="series" />
        </div>
        <div>

            <label for="sale_date">Insert sale date: </label>
            <input type="text" name="sale_date" />
        </div>

        <div>
            <label for="type">Insert type: </label>
            <input type="text" name="type" />
        </div>

        <button type="submit">Add</button>
    </form>
@endsection
