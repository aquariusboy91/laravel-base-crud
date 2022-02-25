<?php

namespace App\Http\Controllers;

use App\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    protected $ruleValidation =  [
        'titolo' => 'required|max:80',
        'editore' => 'required|',
        'trama' => 'required|max:60',
        'photo' => 'nullable|email|max:100',
        'data_uscita' => 'required',
        'prezzo' => 'required',
    ];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::paginate(5);
        $data = [
            'comics' => $comics,
            'title' => 'Comic Home'
        ];

        return view('Comic.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Comic.create', ['title' => 'Add New Comic']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validazione
        $validateData = $request->validate($this->ruleValidation);

        $dataArray = $request->all();
       
        $comic = new Comic();
        $comic->titolo = $dataArray['titolo'];
        $comic->editore = $dataArray['editore'];
        $comic->trama = $dataArray['trama'];
        $comic->numero = $dataArray['numero'];
        $comic->photo = $dataArray['photo'];
        $comic->data_uscita = $dataArray['data_uscita'];
        $comic->prezzo = $dataArray['prezzo'];

        $save = $comic->save();


        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        $data = [
            'comic' => $comic,
            'title' => $comic->titolo
        ];
        
        return view('Comic.show', $data);
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('Comic.edit', ['comic'=> $comic]);
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
        $validateData = $request->validate($this->ruleValidation);

        $data = $request->all();
        $updated = $comic->update($data);
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
        $comic->DELETE();
        return redirect()->route('comics.index')
        ->with('status', "Comic $comic->id deleted!");
    }
}
