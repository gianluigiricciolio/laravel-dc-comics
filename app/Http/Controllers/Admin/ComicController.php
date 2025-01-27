<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreComicRequest;
use App\Http\Requests\UpdateComicRequest;
use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // IMPORTO IL RISULTATO DELLA QUERY IN COMICS E PASSO COMICS TRAMITE ARRAY ASSOCIATIVO CON COMPACT ALLA VIEW INDEX
        $comics = Comic::all();
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreComicRequest $request)
    {
        $data = $request->validated();

        $comic = new Comic();

        $comic->title = $data['title'];
        $comic->series = $data['series'];
        $comic->price = $data['price'];
        $comic->description = $data['description'];

        $comic->save();

        return redirect()->route('comics.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $comic = Comic::findOrFail($id);
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $comic = Comic::findOrFail($id);
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateComicRequest $request, string $id)
    {
        $data = $request->all();
        $comic = Comic::findOrFail($id);

        $comic->title = $data['title'];
        $comic->series = $data['series'];
        $comic->price = $data['price'];
        $comic->description = $data['description'];
        $comic->save();

        return redirect()->route('comics.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Comic::findOrFail($id)->delete();
        return redirect()->route('comics.index');
    }
}
