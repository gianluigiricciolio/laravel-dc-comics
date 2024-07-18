@extends('layouts.app')

@section('main')
<h1>Comics list</h1>
<ul>
    @foreach($comics as $comic)
    <li>
        {{ $comic->title }}
    </li>
    @endforeach
</ul>
@endsection