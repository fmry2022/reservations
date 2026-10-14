<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artist;

class ArtistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $artists = Artist::all();

	return view('artist.index',[
	'artists'=>$artists,
	'resource'=>'artistes',
	]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $artist = Artist::find($id);

	return view('artist.show',[
	'artist'=> $artist,
	]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $artist = Artist::find($id);
	
	return view('artist.edit', [
		'artist' => $artist,
	]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
    // 1. Vérifier les données envoyées par le formulaire
    $validated = $request->validate([
        'firstname' => 'required|max:60',
        'lastname'  => 'required|max:60',
    ]);

    // 2. Retrouver l'artiste à modifier
    $artist = Artist::find($id);

    // 3. Mettre à jour et enregistrer en base
    $artist->update($validated);

    // 4. Rediriger vers la fiche de l'artiste
    return redirect()->route('artist.show', $artist->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
