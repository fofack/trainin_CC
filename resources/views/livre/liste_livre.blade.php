@extends('accueil')

@section('content')
    <h1>Listes des livres</h1>
    <table class="table table-dark table-bordered">
        <thead>
            <th>ID</th>
            <th>Nom du livre</th>
            <th>Auteur</th>
            <th>ISBN</th>
            <th>Date edition</th>
            <th>Description</th>
            <th>Exemplaire(s)</th>
            <th>Etat</th>
            <th>Categorie</th>
            <th>Action</th>
        </thead>
        @foreach ($livres as $livre)
            <tr>
                <td>{{ $livre->id }}</td>
                <td>{{ $livre->nom }}</td>
                <td>{{ $livre->nom_auteur }}</td>
                <td>{{ $livre->numero_isbn }}</td>
                <td>{{ $livre->date_edition }}</td>
                <td>{{ $livre->description }}</td>
                <td>{{ $livre->nombre_exple }}</td>
                <td>{{ $livre->etat }}</td>
                <td>{{ $livre->category_id }}</td>
                <td>
                    <a class="btn btn-primary" href="{{url('update-livre/'.$livre->id)}}">Update</a>
                    <a class="btn btn-secondary" href="{{url('details-livre/'.$livre->id)}}">Details</a>
                    <a class="btn btn-danger" href="{{url('delete-livre/'.$livre->id)}}">delete</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
