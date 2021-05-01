@extends('accueil')

@section('content')
    <table class="table table-dark">
        <thead>
            <th>ID</th>
            <th>Nom client</th>
            <th>Nom livre</th>
            <th>Date pret</th>
            <th>Date restitution</th>
            <th>Nombre exemplaire</th>
            <th>Action</th>
        </thead>
        <tbody>
            @foreach ($prets as $pret)
                <tr>
                    <td>{{ $pret->id }}</td>
                    <td>{{ $pret->client }}</td>
                    <td>{{ $pret->livre }}</td>
                    <td>{{ $pret->date_pret }}</td>
                    <td>{{ $pret->date_restitue }}</td>
                    <td>{{ $pret->nbre_exple }}</td>
                    <td>
                        <a class="btn btn-primary" href="{{ url('update/' . $pret->id) }}">Update</a>
                        <a class="btn btn-secondary" href="{{ url('details/' . $pret->id) }}">Details</a>
                        <a class="btn btn-danger" href="{{ url('delete-pret/' . $pret->id) }}">delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
