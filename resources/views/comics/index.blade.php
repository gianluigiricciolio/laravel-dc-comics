@extends('layouts.app')

@section('main')
    <h1>Comics list</h1>
    <ul>
        @foreach ($comics as $comic)
            <li>
                <a href="{{ route('comics.show', $comic->id) }}">
                    {{ $comic->title }}
                </a>
            </li>
        @endforeach
    </ul>
@endsection
