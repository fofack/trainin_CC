<?php

namespace App\Http\Controllers\basile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\basile\Pret;
use App\Models\basile\Client;
use App\Models\basile\Livre;

class PretController extends Controller
{
    public function index()
    {
        $prets =Pret::select('prets.id','prets.date_pret','prets.date_restitue','livres.nom as livre','clients.nom as client','nbre_exple')
        ->join('clients','prets.client_id','=','clients.id')
        ->join('livres','prets.livre_id','=','livres.id')
        ->get();
        return view('pret.liste_pret',compact('prets'));
    }

    public function create()
    {
        $clients = Client::all();
        $livres = Livre::all();
        return view('pret.ajout_pret', compact('clients','livres'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'livre_id' => 'required'
        ]);
        $data = $request->all();
        $livre = Livre::FindOrFail($data['livre_id']);
        $livre->etat = "emprunte";
        $livre->update();
        Pret::create($data);
        return redirect('/liste_pret');
    }

    public function show($id)
    {
        $prets = Pret::select('prets.date_pret','prets.date_restitue','clients.nom as client','livres.nom as livre')
        ->join('clients','prets.client_id','=','clients.id')
        ->join('livres','prets.livre_id','=','livres.id')
        ->where('prets.id','=', $id)
        ->first();
        return view('pret.show',compact('prets'));
    }

    public function edit($id)
    {
        $prets = Pret::FindOrFail($id);
        return view('pret.ajout_pret', compact('prets'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $pret = Pret::FindOrFail($id);
        $pret->update($data);
        return redirect('/liste_pret');
    }

    public function destroy($id)
    {
        $pret = Pret::FindOrFail($id);
        $pret->delete();
        return redirect('/liste_pret');
    }
}
