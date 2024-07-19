@extends('layouts.app')

@section('main')
    <h1>Comic details</h1>

    <h3>{{ $comic->title }}</h3>
    <p>{{ $comic->series }}</p>
    <p>{{ $comic->price }}</p>
    <p>{{ $comic->description }}</p>
@endsection
