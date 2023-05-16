<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{

    public function index()
    {
        $comics = Comic::all();
        return view('comics.index', compact('comics'));
    }


    public function create()
    {
        return view('comics.create');
    }


    public function store(Request $request)
    {
        $form_data = $request->all();

        $newComic = new Comic();
        $newComic->thumb = $form_data["thumb"];
        $newComic->title = $form_data["title"];
        $newComic->price = $form_data["price"];
        $newComic->series = $form_data["series"];
        $newComic->description = $form_data["description"];
        $newComic->sale_date = $form_data["sale_date"];
        $newComic->type = $form_data["type"];
        $newComic->save();

        return redirect()->route('comics.show', ['comic' => $newComic->id]);
    }


    public function show($id)
    {
        $comic = Comic::findOrFail($id);
        return view('comics.show', compact('comic'));
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}