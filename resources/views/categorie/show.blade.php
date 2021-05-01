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
                <th>Nom categorie:</th>
                <td>{{$categories->nom}}</td>
            </tr>
            <tr>
                <th>Description:</th>
                <td>{{$categories->description}}</td>
            </tr>
        </table>
    </div>
</body>
</html>
