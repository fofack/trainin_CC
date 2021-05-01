<?php

namespace App\Http\Controllers\basile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\basile\Category;
use App\Models\basile\Client;
use App\Models\basile\Livre;
use App\Models\basile\Pret;

class CategoryController extends Controller
{

    public function index()
    {
        $categories = Category::all();
        return view('categorie.liste_categorie',compact('categories'));
    }

    public function create()
    {
        return view('categorie.ajout_categorie');
    }


    public function store(Request $request)
    {
        $data = $request->all();
        Category::create($data);
        return redirect('/liste_categorie');
    }

    public function show($id)
    {
        $categories = Category::FindOrFail($id);
        return view('categorie.show',compact('categories'));
    }

    public function edit($id)
    {
        $categories = Category::FindOrFail($id);
        return view('categorie.ajout_categorie',compact('categories'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $categorie = Category::FindOrFail($id);
        $categorie->update($data);
        return view('/liste_categorie');
    }


    public function destroy($id)
    {
        $categorie = Category::FindOrFail($id);
        $categorie->delete();
        return redirect('/liste_categorie');
    }

    public function count()
    {
        # code...
        $prets = Pret::all()->count();
        $livres = Livre::all()->count();
        $categories = Category::all()->count();
        $clients = Client::all()->count();
        return view('statistique', compact('prets','clients','categories','livres'));
    }
}
