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
        $request->validate(
            [
                'title' => 'required|max:60',
                'description' => 'nullable|max:255',
                'thumb' => 'required|max:255',
                'price' => 'required|max:6',
                'series' => 'required|max:50',
                'sale_date' => 'required|max:12',
                'type' => 'required|max:20',
            ],
            [
                'title.required' => "il campo e' obbligatorio",
                'title.max' => "massimo 60 caratteri",
                'description.max' => "massimo 255 caratteri",
                'thumb.required' => "il campo e' obbligatorio",
                'thumb.max' => "massimo 255 caratteri",
                'price.required' => "il campo e' obbligatorio",
                'price.max' => "massimo 6 caratteri",
                'series.required' => "il campo e' obbligatorio",
                'series.max' => "massimo 50 caratteri",
                'sale_date.required' => "il campo e' obbligatorio",
                'sale_date.max' => "massimo 12 caratteri",
                'type.required' => "il campo e' obbligatorio",
                'type.max' => "massimo 20 caratteri"

            ]
        );

        $form_data = $request->all();

        $newComic = new Comic();

        /*
        $newComic = new Comic();
        $newComic->thumb = $form_data["thumb"];
        $newComic->title = $form_data["title"];
        $newComic->price = $form_data["price"];
        $newComic->series = $form_data["series"];
        $newComic->description = $form_data["description"];
        $newComic->sale_date = $form_data["sale_date"];
        $newComic->type = $form_data["type"];
        $newComic->save();
        */
        $newComic->fill($form_data);

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
        $comic = Comic::findOrFail($id);

        return view('comics.edit', compact('comic'));
    }


    public function update(Request $request, $id)
    {
        $comic = Comic::findOrFail($id);

        $request->validate(
            [
                'title' => 'required|max:60',
                'description' => 'nullable|max:255',
                'thumb' => 'required|max:255',
                'price' => 'required|max:6',
                'series' => 'required|max:50',
                'sale_date' => 'required|max:12',
                'type' => 'required|max:20',
            ],
            [
                'title.required' => "il campo e' obbligatorio",
                'title.max' => "massimo 60 caratteri",
                'description.max' => "massimo 255 caratteri",
                'thumb.required' => "il campo e' obbligatorio",
                'thumb.max' => "massimo 255 caratteri",
                'price.required' => "il campo e' obbligatorio",
                'price.max' => "massimo 6 caratteri",
                'series.required' => "il campo e' obbligatorio",
                'series.max' => "massimo 50 caratteri",
                'sale_date.required' => "il campo e' obbligatorio",
                'sale_date.max' => "massimo 12 caratteri",
                'type.required' => "il campo e' obbligatorio",
                'type.max' => "massimo 20 caratteri"

            ]
        );
        $form_data = $request->all();
        $comic->update($form_data);

        return redirect()->route('comics.show', ['comic' => $comic->id]);
    }


    public function destroy($id)
    {
        $comic = Comic::findOrFail($id);
        $comic->delete();

        return redirect()->route('comics.index');
    }
}