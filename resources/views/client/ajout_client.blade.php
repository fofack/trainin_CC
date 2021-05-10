@extends('accueil')

@section('content')
    <form action="{{ url(isset($clients) ? 'update_livre/'.$clients->id : 'save_client')}}" method="POST">
        @csrf
        <div class="form-group">
            <label class="label-control" for="nom">Nom du client</label>
            <input class="form-control" type="text" value="{{isset($clients->nom) ? $clients->nom : '' }}" name="nom" id="nom">
        </div>
        <div class="form-group">
            <label class="label-control" for="telephone">Telephone</label>
            <input class="form-control" type="text" value="{{isset($clients->telephone) ? $clients->telephone : ''}}" name="telephone" id="telephone">
        </div>
        <div class="form-group">
            <label class="label-control" for="email">E-mail</label>
            <input class="form-control" type="email" value="{{isset($clients->email) ? $clients->email : ''}}" name="email" id="email">
        </div>
        <div class="form-group col-md-5">
            <button class="btn btn-success" type="submit">{{isset($clients) ? 'Modifier' :'Ajouter'}}</button>
        </div>
    </form>
@endsection
