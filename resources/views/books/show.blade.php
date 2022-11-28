@extends('layout')

@section('content')
    <div class="row">
        <div class="mx-auto col-md-8 bg-secondary text-white p-2">
            <h3>Book Detail</h3>
        </div>
        <div class="mx-auto col-md-8 row p-0 my-3">
            <div class="card">
                <img src="{{$book->image}}" class="card-img-top" alt="book image">
                <div class="card-body">
                  <p class="card-text">Title: {{$book->title}}</p>
                  <p class="card-text">Author: {{$book->author}}</p>
                  <p class="card-text">Publisher: {{$publisher->name}}</p>
                  <p class="card-text">Year: {{$book->year}}</p>
                  <p class="card-text">Synopsis:</p>
                  <p class="card-text">{{$book->synopsis}}</p>
                </div>
            </div>
        </div>
    </div>
@endsection