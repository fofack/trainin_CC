@extends('accueil')

@section('content')
    <h1>Liste des categories</h1>
    <table class="table table-dark table-bordered">
        <thead>
            <th>ID</th>
            <th>Nom</th>
            <th>Description</th>
            <th>Action</th>
        </thead>
        @foreach ($categories as $categorie)
            <tr>
                <td>{{ $categorie->id }}</td>
                <td>{{ $categorie->nom }}</td>
                <td>{{ $categorie->description }}</td>
                <td>
                    <a href="{{ url('update-categorie/' . $categorie->id) }}" class="btn btn-primary">Update</a>
                    <a class="btn btn-secondary" href="{{ url('details/' . $categorie->id) }}">Details</a>
                    <a class="btn btn-danger" href="{{ url('delete-categorie/' . $categorie->id) }}">delete</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
