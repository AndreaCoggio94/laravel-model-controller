@extends('layouts.app')

@section('movies')
    @foreach ($movies as $movie)
        @include('partials.card')
    @endforeach
@endsection