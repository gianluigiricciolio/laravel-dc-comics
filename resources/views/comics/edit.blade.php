@extends('layouts.app')

@section('main')
    <h1>Edit</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="POST" action="{{ route('comics.update', $comic->id) }}">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">title</label>
            <input type="text" class="form-control" id="title" name="title" value={{ old('title', $comic->title) }}>
        </div>
        <div class="mb-3">
            <label for="series" class="form-label">series</label>
            <input type="text" class="form-control" id="series" name="series"
                value={{ old('series', $comic->series) }}>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">price</label>
            <input type="text" class="form-control" id="price" name="price"
                value={{ old('price', $comic->price) }}>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">description</label>
            <textarea class="form-control" id="description" name="description">{{ old('description', $comic->description) }}</textarea>
        </div>
        <button type="submit">INVIA</button>
    </form>
@endsection
