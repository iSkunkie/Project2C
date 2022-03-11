<?php
require_once 'vendor/autoload.php';

use Proejct5\Play;
use Proejct5\Game;
session_start();

if(isset($_SESSION['play']))
{
    $play = $_SESSION['play'];
}
?>

<!doctype html>
<html lang="en" class="h-100">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Wakken en de Ijsberen</title>
    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
        main > .container {
            padding: 60px 15px 0;
        }

        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>

</head>
<body class="d-flex flex-column h-100">

<header>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Project 5</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled">Disabled</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<!-- Begin page content -->
<main class="flex-shrink-0">
    <div class="container">
        <h1 class="mt-5">Wakken en Ijsberen</h1>
<?php

// check voor het antwoord van de worp
if(isset($_POST['check']))
{
    if($_POST['check'] == true)
    {
        //check voor als het antwoord goed is
    } else {
        //fout melding + hint
    }
}
/*
if(isset($_POST['showanswer']))
{
    // laat antwoord zien
}

*/
    if(isset($_POST[''])) {

    }

elseif (isset($_POST['throw']) && isset($_POST['amountdice']))
{
    $game = new Game($_POST['amountdice']);
    $play->addGame($game);

    ?>
    <div id="steen1"></div>
    <div id="steen2"></div>
    <div id="steen3"></div>
    <div id="steen4"></div>
    <div id="steen5"></div>
    <div id="steen6"></div>
    <div id="q"></div>

    <form action="" method="POST">
        <div class="mb-3">
            <label for="wakken" class="form-label">Hoeveel wakken</label>
            <input type="number" min="0" max="10" class="form-control" id="wakken" name="wakken" aria-describedby="wakkenHelp">
        </div>
    </form>
    <form action="" method="POST">
        <div class="mb-3">
            <label for="ijsberen" class="form-label">Hoeveel ijsberen</label>
            <input type="number" min="0" max="10" class="form-control" id="ijsberen" name="ijsberen" aria-describedby="ijsberenHelp">
        </div>
    </form>
    <form action="" method="POST">
        <div class="mb-3">
            <label for="penguins" class="form-label">Hoeveel pinguïns?</label>
            <input type="number" min="0" max="10" class="form-control" id="wakken" name="wakken" aria-describedby="wakkenHelp">
        </div>
        <button type="submit" class="btn btn-primary" name="check">Check antwoord</button>
    </form>
    <?php
}

elseif(isset($_POST['register']))
{
    $play = new Play($_POST['name']);
    $_SESSION['play'] = $play;
    ?>
    <form action="" method="POST">
        <div class="mb-3">
            <label for="amountdice" class="form-label">Hoeveel dobbelstenen</label>
            <input type="number" min="3" max="8" class="form-control" id="amountdice" name="amountdice" aria-describedby="amountdiceHelp" required>
        </div>
        <button type="submit" class="btn btn-primary" name="throw">Gooi dobbelstenen</button>
    </form>
    <?php
}
elseif(isset($_POST['begin']))
{
    //laat formulier zien om naam in te vullen
    ?>
    <form action="" method="POST">
        <div class="mb-3">
            <label for="name" class="form-label">Naam</label>
            <input type="text" class="form-control" id="name" name="name" aria-describedby="nameHelp">
        </div>
        <button type="submit" class="btn btn-primary" name="register">Registreren</button>
    </form>
        <?php
} else {
    //laat startknop zien
    ?>
    <form action="" method="POST">
        <button type="submit" class="btn btn-primary" name="begin">Start spel</button>
    </form>
        <?php
}

//var_dump($play);
?>
    </div>
</main>

<footer class="footer mt-auto py-3 bg-light">
    <div class="container">
        <span class="text-muted">Place sticky footer content here.</span>
    </div>
</footer>
</body>
</html>

