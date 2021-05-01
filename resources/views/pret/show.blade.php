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
                <td>{{$prets->livre}}</td>
            </tr>
            <tr>
                <th>Nom du client</th>
                <td>{{$prets->client}}</td>
            </tr>
            <tr>
                <th>Date de pret</th>
                <td>{{$prets->date_pret}}</td>
            </tr>
            <tr>
                <th>Date restitution</th>
                <td>{{$prets->date_restitution}}</td>
            </tr>
                <th>Nombre exemplaire(s):</th>
                <td>{{$prets->nbre_exple}}</td>
            </tr>
        </table>
    </div>
</body>
</html>
