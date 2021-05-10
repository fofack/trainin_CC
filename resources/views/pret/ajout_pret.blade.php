@extends('accueil')

@section('content')
    <form action="{{ url(isset($prets) ? '/update_pret/'.$prets->id : 'save_pret') }}" method="POST">
        @csrf
        <div class="form-group">
            <label class="label-control" for="client_id">Choix du client</label>
            <select class="form-control" name="client_id" id="client_id">
                @foreach ($clients as $client)
                    <option value="{{ $client->id }}">{{ $client->nom }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label class="label-control" for="livre_id">Choix du client</label>
            <select class="form-control" name="livre_id" id="livre_id">
                @foreach ($livres as $livre)
                    <option value="{{ $livre->id }}">{{ $livre->nom }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label class="label-control" for="date_pret">Date de pret</label>
            <input class="form-control" type="date" name="date_pret" id="date_pret" value ="{{isset($prets->date_pret) ? $prets->date_pret : ''}}">
        </div>
        <div class="form-group">
            <label class="label-control" for="date_restitue">Date de restitutin</label>
            <input class="form-control" type="date" name="date_restitue" id="date_restitue" value ="{{isset($prets->date_restitue) ? $prets->date_restitue : ''}}">
        </div>
        <div class="form-group">
            <label class="label-control" for="nbre_exple">Nombre exemplaire</label>
            <input class="form-control" type="number" name="nbre_exple" id="nbre_exple" value ="{{isset($prets->nbre_exple) ? $prets->nbre_exple : ''}}">
        </div>
        <div class="form-group col-md-5">
            <button type="submit" class="btn btn-success">
            {{isset($prets) ? 'Modifier' : 'Ajouter'}}</button>
        </div>
    </form>
@endsection
