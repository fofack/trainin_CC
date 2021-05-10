<?php

namespace App\Http\Controllers\basile;

use App\Http\Controllers\Controller;
use App\Models\basile\Category;
use Illuminate\Http\Request;
use App\Models\basile\Livre;

class LivreController extends Controller
{
    public function index()
    {
        $livres = Livre::all();
        return view('livre.liste_livre', compact('livres'));
    }

    public function indexLivre()
    {
        $livres = Livre::all();
        return view('app', compact('livres'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('livre.ajout_livre',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = $request->all();
        if ($request->hasFile('image')) {
            $nom = $request->file('image')->getClientOriginalName();
            $path = 'image_'.date("H-i-s").'_'.$nom;
            $request->file('image')->move(public_path().'/assets/images', $path);
            $data['image'] = $path;
        }
        Livre::create($data);
        $categories = Category::all();
        return redirect('/liste_livre');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Livre  $livre
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $livres = Livre::FindOrFail($id);
        return view('livre.show', compact('livres'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Livre  $livre
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $livres = Livre::FindOrFail($id);
        $categories = Category::all();
        return view('livre.ajout_livre', compact('livres','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Livre  $livre
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $livre = Livre::FindOrFail($id);
        $livre->update($data);
        return redirect('/liste_livre');
    }

    public function destroy($id)
    {
        $livre = Livre::FindOrFail($id);
        $livre->delete();
        return redirect('/liste_livre');
    }
}
