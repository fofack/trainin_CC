@extends('accueil')

@section('content')
<div class="row">
    <div class="col-md-2">
        <h1>{{$clients}}</h1>
        <h3>Clients</h3>
    </div>
    <div class="col-md-2">
        <h1>{{$livres}}</h1>
        <h3>Livres</h3>
    </div>
    <div class="col-md-2">
        <h1>{{$categories}}</h1>
        <h3>Categories</h3>
    </div>
    <div class="col-md-2">
        <h1>{{$prets}}</h1>
        <h3>Prets</h3>
    </div>
</div>
@endsection
