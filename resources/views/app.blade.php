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
    <style>
        img {
            width: 100%;
        }

        section {
            margin-top: 8%
        }

        footer {
            margin-top: 5%;
            background-color: black;
            color: white;
        }

    </style>
</head>

<body>
    <div class="container-fluid">
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
                            <a class="nav-link " data-value="team" href="{{ url('count') }}">Admin</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " data-value="contact" href="#">Contact</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <section>
            <div class="row">
                @foreach ($livres as $livre)
                    <div class="col-md-3">
                        <div>
                            <img src="{{ url('assets/images/' . $livre->image) }}" alt="Rien" />
                        </div>
                        <p>{{ $livre->nom }}</p>
                        <div>
                            {{ $livre->description }}
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
        <aside>
            <div class="row">
                <h1>Commentaires</h1>
            </div>
            <div class="row">
                <form action="">
                    <div class="form-group">
                        <label class="label-control" for="nom">Votre nom</label>
                        <input class="form-control" type="text" name="nom" id="nom">
                    </div>
                    <div class="form-group">
                        <label class="label-control" for="email">Votre emal</label>
                        <input class="form-control" type="email" name="email" id="email">
                    </div>
                    <div class="form-group">
                        <label class="label-control" for="message">Votre message</label>
                        <textarea class="form-control" type="textarea" name="message" id="message"></textarea>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <button class="btn btn-success">Ajouter</button>
                        </div>
                    </div>
                </form>
            </div>

        </aside>
        <footer>
            <div class="row">
                <div class="col-md-5">
                    <h1>Contact</h1>
                </div>
                <div class="col-md-5">
                    <h1>Contact</h1>
                </div>
            </div>
            <div class="row">
                <h3>&copy;freelearning 2021</h3>
            </div>
        </footer>
    </div>
</body>

</html>
