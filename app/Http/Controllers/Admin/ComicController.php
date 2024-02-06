<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
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
    public function store(Request $request)
    {

        // $request->validate([
        //     'title' => 'required|max:70',
        //     'description' => 'required|max:950',
        //     'thumb' => 'required|url|ends_with:png,jpg,webp|max:480',
        //     'price' => 'required|numeric|decimal:2|max:10',
        //     'series' => 'required|max:90',
        //     'sale_date' => 'required',
        //     'type' => 'required|max:25',
        // ]);

        // $data = $request->all();

        $data = $this->validation($request->all());

        $comic = new Comic();

        // $comic->title = $data['title'];
        // $comic->description = $data['description'];
        // $comic->thumb = $data['thumb'];
        // $comic->price = $data['price'];
        // $comic->series = $data['series'];
        // $comic->sale_date = $data['sale_date'];
        // $comic->type = $data['type'];

        $comic->fill($data);
        $comic->save();

        // redirect alla pagina dei dettagli
        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Display the specified resource.
     */
    // public function show(string $id)
    public function show(Comic $comic)
    {
        // $comic = Comic::find($id);

        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {
        // $data = $request->all();
        $data = $this->validation($request->all());

        // $comic->title = $data['title'];
        // $comic->description = $data['description'];
        // $comic->thumb = $data['thumb'];
        // $comic->price = $data['price'];
        // $comic->series = $data['series'];
        // $comic->sale_date = $data['sale_date'];
        // $comic->type = $data['type'];

        $comic->update($data);
        // $comic->save();
        // return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route('comics.index');
    }

    /**
     * Validation
     */
    private function validation($data)
    {
        $validator = Validator::make($data, [
            'title' => 'required|max:70',
            'description' => 'required|max:950',
            'thumb' => 'required|url|ends_with:png,jpg,webp|max:480',
            'price' => 'required|numeric|decimal:2|max:20',
            'series' => 'required|max:90',
            'sale_date' => 'required',
            'type' => 'required|max:25',
        ], [
            'title.required' => 'Il titolo è obbligatorio',
            'title.max' => 'Il titolo deve avere massimo :max caratteri',
            'description.required' => 'Il campo description è obbligatorio',
            'description.max' => 'Il campo description deve avere massimo :max caratteri',
            'thumb.required' => 'Il campo thumb è obbligatorio',
            'thumb.url' => 'Il campo thumb deve essere un url',
            'thumb.ends_with' => 'Il campo thumb non termina con png, jpg, webp',
            'thumb.max' => 'Il campo thumb deve avere massimo :max caratteri',
            'price.required' => 'Il campo price è obbligatorio',
            'price.number' => 'Il campo price deve essere un numero',
            'price.decimal' => 'Il campo price deve avere :decimal numeri decimali',
            'price.max' => 'Il campo price deve avere deve avere massimo :max caratteri',
            'series.required' => 'Il campo series è obbligatorio',
            'series.max' => 'Il campo series deve avere deve avere massimo :max caratteri',
            'sale_date.required' => 'Il campo sale_date è obbligatorio',
            'type.required' => 'Il campo type è obbligatorio',
            'type.max' => 'Il campo type deve avere deve avere massimo :max caratteri',

        ])->validate();

        return $validator;
    }
}
