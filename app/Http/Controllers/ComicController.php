<?php
// RICORDA: SE NON è UN METODO GET CI VA IL "redirect()->route()"

namespace App\Http\Controllers;

use App\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //qui prendiamo tutti i dati dal nostro "modello speciale"
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
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //qui salviamo i dati del create
        $request->validate([
            "title" => 'required',
            "description" => 'required',
            "thumb" => 'required',
            "price" => 'required',
            "series" => 'required',
            "sale_date" => 'required|date|after_or_equal:today',
            "type" => 'required',
        ]);

        $data = $request->all();

        $newComic = new Comic();
        $newComic->fill($data);

        $newComic->save();
        $id = $newComic->id;
        return redirect()->route('comics.show', $id);

      //  return redirect()->route('comics.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        //ritorna un elemento selezionato
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        //da inviare all'update
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        //qui aggiorniamo i dati dell'edit
        $request->validate([
            "title" => 'required',
            "description" => 'required',
            "thumb" => 'required',
            "price" => 'required',
            "series" => 'required',
            "sale_date" => 'required|date',
            "type" => 'required',
        ]);

        $data = $request->all();
        $comic->update($data);
        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        //gli si passa l'elemento da distruggere e ci si reindirizza alla home con i risultati di index
         $comic->delete();
        return redirect()->route('comics.index');
    }
}
