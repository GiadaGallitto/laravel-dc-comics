<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public $rules;
    public $messages;

    public function __construct(){
        $this->rules = [
            'title'=> 'required|min:5|max:100',
            'description'=> 'required|min:15',
            'thumb'=> 'required|url',
            'price'=> 'required|numeric',
            'series'=> 'required|min:5|max:100',
            'sale_date'=> 'required',
            'type'=> 'required|min:2|max:100',
        ];

        $this->messages = [
            'title.required'=>'Inserisci un titolo',
            'title.min'=>'Il titolo è troppo corto',
            'title.max'=>'Credo tu abbia esagerato coi caratteri del titolo',

            'description.required'=>'Serve una descrizione',
            'description.min'=>'Credo tu possa impegnarti ad aggiungere altro nella descrizione',

            'thumb.required'=>'Mi serve un\'immagine',
            'thumb.url'=>'Non penso che quel url sia valido sai?',

            'price.required'=>'Lo diamo gratis questo comic?Inserisci un prezzo va',
            'price.numeric'=>'credo che i soldi funzionino ancora coi numeri',

            'series.required'=>'Inserire la serie',
            'series.min'=>'Serie troppo corta',
            'series.max'=>'Ok forse la serie è un po\' lunghetta',

            'sale_date.required'=>'Penso che abbia una data, no?',

            'type.required'=>'Manca la tipologia',
            'type.min'=>'Tipologia troppo corta',
            'type.max'=>'Tipologia troppo lunga',
        ];
    }
    
    public function index()
    {
        //
        $comics = Comic::all();
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $comic = new Comic();
        return view('comics.create', compact('comic'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = $request->all();
        // $newComic = new Comic();
        //     $newComic->title = $data['title'];
        //     $newComic->description = $data['description'];
        //     $newComic->thumb = $data['thumb'];
        //     $newComic->price = $data['price'];
        //     $newComic->series = $data['series'];
        //     $newComic->sale_date = $data['sale_date'];
        //     $newComic->type = $data['type'];
        //     $newComic->save();
        $request->validate($this->rules, $this->messages);

            $newComic = new Comic();
            $newComic->fill($data);
            $newComic->save();

            return redirect()->route('comics.show', $newComic->id);
    }

    /**
     * Display the specified resource.
     *
    //  * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comic = Comic::findOrFail($id);
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $formData = $request->all();

        $request->validate($this->rules, $this->messages);

        $comic = Comic::findOrFail($id);

        $comic->update($formData);

        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        //
        $comic->delete();

        return redirect()->route('comics.index');

    }
}
