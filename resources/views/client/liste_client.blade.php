@extends('accueil')

@section('content')
    <table class="table table-dark">
        <thead>
            <th>Nom</th>
            <th>Telephone</th>
            <th>E-mail</th>
            <th>Action</th>
        </thead>
        <tbody>
            @foreach ($clients as $client)
                <tr>
                    <td>{{ $client->nom }}</td>
                    <td>{{ $client->telephone }}</td>
                    <td>{{ $client->email }}</td>
                    <td>
                        <a class="btn btn-primary" href="{{ url('update-client/' . $client->id) }}">Edit</a>
                        <a class="btn btn-secondary" href="{{ url('details/' . $client->id) }}">Details</a>
                        <a class="btn btn-danger" href="{{ url('delete-client/' . $client->id) }}">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
