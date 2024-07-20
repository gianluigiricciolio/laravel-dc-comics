@extends('layouts.app')

@section('main')
    <h1>Comics list</h1>
    <a href=" {{ route('comics.create') }}">Crea</a>
    <ul>
        @foreach ($comics as $comic)
            <li>
                <a href="{{ route('comics.edit', $comic->id) }}">Edit</a>
                <form method="POST" action="{{ route('comics.destroy', $comic->id) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" style="all:unset">Delete</button>
                </form>
                <a href="{{ route('comics.show', $comic->id) }}">
                    {{ $comic->title }}
                </a>
            </li>
        @endforeach
    </ul>
@endsection
