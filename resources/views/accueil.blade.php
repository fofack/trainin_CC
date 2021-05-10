<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FreeLearning</title>
    <link rel="stylesheet" href="{{ url('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/main.css') }}">
    <link rel="javascript" href="{{ url('assets/js/main.js') }}">
</head>

<body>
    <div class="container">
        <header class="header">
            <!-- navbar -->
            <nav class="navbar navbar-expand-lg fixed-top ">
                <a class="navbar-brand" href="#">Home</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav mr-4">
                        <li class="nav-item">
                            <a class="nav-link" data-value="about" href="{{ url('liste_livre') }}">Voir livre</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " data-value="portfolio" href="{{ url('ajout_livre') }}">Ajout
                                livre</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " data-value="blog" href="{{ url('liste_categorie') }}">Voir
                                categorie</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " data-value="team" href="{{ url('ajout_categorie') }}">Ajout
                                categorie</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " data-value="blog" href="{{ url('liste_pret') }}">Voir pret</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " data-value="team" href="{{ url('ajout_pret') }}">Ajout pret</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link " data-value="blog" href="{{ url('liste_client') }}">Voir client</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " data-value="team" href="{{ url('ajout_client') }}">Ajout client</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " data-value="team" href="{{ url('ajout_client') }}">Admin</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " data-value="contact" href="#">Contact</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div>
            <div class="sidenav">
                <h1>JUNIOR</h1>
                <a class="active" href="{{url('count')}}">Statistique</a>
                <h3>Clients</h3>
                <a href="{{url('ajout_client')}}">Ajout</a>
                <a href="{{url('liste_client')}}">Liste</a>
                <h3>Livres</h3>
                <a href="{{url('ajout_livre')}}">Ajout</a>
                <a href="{{url('liste_livre')}}">Liste</a>
                <h3>Categorie</h3>
                <a href="{{url('ajout_categorie')}}">Ajout</a>
                <a href="{{url('liste_categorie')}}">Liste</a>
                <h3>Pret</h3>
                <a href="{{url('ajout_pret')}}">Ajout</a>
                <a href="{{url('liste_pret')}}">Liste</a>
            </div>
            <div  class ="container" id="main">
                @yield('content')
            </div>
        </div>
    </div>

</body>

</html>
