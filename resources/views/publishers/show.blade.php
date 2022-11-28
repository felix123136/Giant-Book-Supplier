@extends('layout')

@section('content')
    <div class="row">
        <div class="mx-auto mt-4 col-md-8 bg-secondary text-white p-2">
            <h3>{{$publisher->name}}</h3>
            <h3>Address - {{$publisher->address}}</h3>
            <h3>Phone - {{$publisher->phone}}</h3>
            <h3>Email - {{$publisher->email}}</h3>
        </div>
        <div class="mx-auto col-md-8 row p-0 my-3">
            @foreach ($books as $book)
                <x-book-card :book="$book" />
            @endforeach
        </div>
    </div>
@endsection