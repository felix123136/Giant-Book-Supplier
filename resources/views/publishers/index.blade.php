@extends('layout')

@section('content')
    <div class="row">
        <div class="mx-auto col-md-8 bg-secondary text-white p-2">
            <h3>Publishers</h3>
        </div>
        <div class="mx-auto col-md-8 row p-0 my-3">
            @foreach ($publishers as $publisher)
                <x-publisher-card :publisher="$publisher" />
            @endforeach
        </div>
    </div>
@endsection