<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{url('assets/bootstrap/css/bootstrap.min.css')}}">
</head>
<body>
    <div class="conatainer">
        <table class="table table-dark table-bordered">
            <tr>
                <th>Nom du livre:</th>
                <td>{{$livres->nom}}</td>
            </tr>
            <tr>
                <th>Auteur:</th>
                <td>{{$livres->nom_auteur}}</td>
            </tr>
            <tr>
                <th>Numer ISBN:</th>
                <td>{{$livres->numero_isbn}}</td>
            </tr>
            <tr>
                <th>Date edition:</th>
                <td>{{$livres->date_edition}}</td>
            </tr>
            <tr>
                <th>Description:</th>
                <td>{{$livres->description}}</td>
            </tr>
            <tr>
                <th>Nombre exemplaire(s)</th>
                <td>{{$livres->nombre_exple}}</td>
            </tr>
            <tr>
                <th>Categorie:</th>
                <td>{{$livres->category_id}}</td>
            </tr>
        </table>
    </div>
</body>
</html>
