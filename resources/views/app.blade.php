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

        #photo{
            padding-top: 5%
        }


        footer {
            margin-top: 5%;
            background-color: black;
            color: white;
        }

        .plants .plants-box figure {
     margin: 0px;
}
.plants .plants-box figure img {
     width: 100%;
}
.plants .plants-box h3 {
     font-size: 30px;
     line-height: 36px;
     font-weight: 600;
     padding: 16px 20px 6px 20px;
     color: #0d0e0a;
}
.plants .plants-box p {
     font-size: 17px;
     line-height: 30px;
     padding: 0px 20px 14px 20px;
     color: #0d0e0a;
}

.plants {
     padding: 90px 0px;
}
    div a:hover{
        cursor: pointer;
        background-color: violet;
        border: 1px solid violet;
        border-radius: 0.5em;
    }
    #title-footer{
        padding-left: 2%
    }
    div h3{
        text-align: center;
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
            <div class="container">
                <div class="row">
                    @foreach ($livres as $livre)
                   <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 ">
                        <div class="plants-box border">
                            <figure><img src="{{ url('/assets/images/livres/'.$livre->image) }}" alt="img"/></figure>
                            <h3 class="text-success bg-secondary">{{ $livre->nom }}</h3>
                            <p class="text-black">{{ $livre->description }}</p>
                            <a class="float-left" id="form" href="{{url('ajout_pret')}}">Preter</a>
                            <a href="{{url('/details-livre/'.$livre->id)}}" class="float-right">Voir plus</a>
                        </div>
                    </div>
                   @endforeach
                </div>
                <aside >
                    <div class="row">
                        <div class="col-md-4">
                            <h1>Commentaires</h1>
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
                                <div class="col-md-3">
                                    <button class="btn btn-success">Ajouter</button>
                                </div>
                        </form>
                        </div>
                        <div class="col-md-8" id="photo">
                            <img src="{{url('/assets/images/a.jpeg')}}" alt="image">
                        </div>
                    </div>
                </aside>

        </section>
        
        <footer>
            <div class="row">
                <div class="col-md-5">
                    <h1>Contact</h1>
                </div>
                <div class="col-md-5">
                    <h1>Contact</h1>
                </div>
            </div>
            <div class="row" id="title-footer">
                <h3>&copy;freelearning 2021</h3>
            </div>
        </footer>
    </div>
</div>
</body>

</html>
