<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Estudiand | Acceuil</title>
    <!-- FONTS -->
    <link href="http://allfont.net/allfont.css?fonts=futura-bold" rel="stylesheet" type="text/css" />
    <!-- STYLES -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/all.css">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="./assets/swiper/swiper.css">
    <script src="./assets/js/jquery-3.2.1.min.js"></script>
</head>
<body>
<header>
    <style>
        .neoGlow {
            margin-right: -50px;
        }

        .neo {
            z-index: 1;
        }

        .navrowSecond {
            align-self: start;
            grid-row: 1;
            width: 800px !important;
            height: 500px !important;
        }
    </style>
    <div class="container">

        <div class="containerSign neoGlow">
            <a href="#" class="neo fixLog">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                Connexion
            </a>
            <a href="#" class="neo fixLog">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                Inscription
            </a>
            <!-- <button type="button" class="btn-purple-bordered fixLog">Connexion</button>
            <button type="button" class="btn-purple fixLog">Inscription</button> -->
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <img class="logo" src="./assets/logos/Estudian_logo.png">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Acceuil <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Test d'orientation</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Evenement</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Orientation
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">1</a>
                        <a class="dropdown-item" href="#">2</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">3</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Révision examen
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">1</a>
                        <a class="dropdown-item" href="#">2</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">3</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Stages
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">1</a>
                        <a class="dropdown-item" href="#">2</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">3</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Etudier à l'étranger</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
                <li class="nav-item">
                    <form class="form-inline my-2 my-lg-0">
                        <input type="search" class="form-control d-none" name="search" id="search">
                        <a class="search-icon" href="#">
                            <i class="fas fa-search fa-lg"></i>
                        </a>
                    </form>
                </li>
            </ul>
        </div>
    </nav>
</header>