@extends('accueil')

@section('content')
    <form action="{{ url(isset($livres)? 'update-livre/'.$livres->id : 'save_livre')}}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label class="label-control" for="nom">Nom du livre</label>
            <input type="text" value="{{$livres->nom}}" class="form-control" name="nom" id="nom" />
        </div>
        <div class="form-group">
            <label class="label-control" for="nom_auteur">Nom de l'auteur</label>
            <input type="text" value="{{$livres->nom_auteur}}" class="form-control" name="nom_auteur" id="nom_auteur" />
        </div>
        <div class="form-group">
            <label class="label-control" for="numero_isbn">Numero d'ISBN du livre</label>
            <input type="text" value="{{$livres->numero_isbn}}" class="form-control" name="numero_isbn" id="numero_isbn" />
        </div>
        <div class="form-group">
            <label class="label-control" for="date_edition">Date d'edition</label>
            <input type="date" value="{{$livres->date_edition}}" class="form-control" name="date_edition" id="date_edition" />
        </div>
        <div class="form-group">
            <label class="label-control" for="description">Description du livre</label>
            <textarea type="textarea" valuetext="{{$livres->description}}" class="form-control" name="description" id="description"></textarea>
        </div>
        <div class="form-group">
            <label class="label-control" for="nombre_exple">Nombre d'exemplaire</label>
            <input type="text" value="{{$livres->nombre_exple}}" class="form-control" name="nombre_exple" id="nombre_exple" />
        </div>
        <div class="form-group">
            <label class="label-control" for="etat">Etat du livre</label>
            <select class="form-control" name="etat" id="etat">
                <option value="restitue" @if (isset($livres) && $livres->etat == 'restitue')
                    selected
                @endif>Restituer</option>
                <option value="emprunte" @if (isset($livres) && $livres->etat == 'emprunte')
                    selected
                @endif>Emprunter</option>
            </select>
        </div>
        <div class="form-group">
            <label class="label-control" for="category_id">Categorie</label>
            <select class="form-control" name="category_id" id="category_id">
                @foreach ($categories as $cat)
                    <option value="{{ $cat->id }}">{{ $cat->nom }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="image" class="label-control">Image du livre
        </div>
        <input class="form-control" type="file" name="image" id="image">
        </div>
        <div class="form-group col-md-5">
            <button class=" form-control btn btn-success" type="submit">{{isset($livres) ?'Modifier': 'Ajouter'}}</button>
        </div>
    </form>
@endsection
