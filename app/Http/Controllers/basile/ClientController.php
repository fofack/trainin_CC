<?php

namespace App\Http\Controllers\basile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\basile\Client;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::all();
        return view('client.liste_client',compact('clients'));
    }

    public function create()
    {
        return view('client.ajout_client');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        Client::create($data);
        return redirect('/liste_client');
    }


    public function show($id)
    {
        $clients = Client::FindOrFail($id);
        return view('client.show', compact('clients'));
    }

    public function edit($id)
    {
        $clients = Client::FindOrFail($id);
        return view('client.ajout_client',compact('clients'));
    }

    public function update(Request $request, Client $client)
    {
        $data = $request->all();
        $client = Client::FindOrFail($client);
        $client->update($data);
    }

    public function destroy($id)
    {
        $client = Client::FindOrFail($id);
        $client->delete();
        return redirect('/liste_client');
    }
}
