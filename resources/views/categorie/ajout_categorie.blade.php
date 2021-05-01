@extends('accueil')

@section('content')
    <form action="{{url(isset($categories) ? 'update-categorie/'.$categories->id : 'save_categorie')}}" method="POST">
        @csrf

        <div class="form-group">
            <label  class="label-control" for="nom">Nom de la categorie</label>
            <input class="form-control" type="text" value="{{$ategories->nom}}" name="nom" id="nom">
        </div>
        <div class="form-group">
            <label  class="label-control" for="description">Nom de la categorie</label>
            <textarea class="form-control" type="text" value="{{$categories->description}}" name="description" id="description"></textarea>
        </div>
        <div class="col-md-5 ">
        <button class="btn btn-success" type="submit">{{isset($categories) ? 'Modifier' :'Ajouter'}}</button>
        </div>
    </form>
@endsection
