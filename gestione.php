<?php
session_start();
if (isset ($_GET['logout'])){
    session_unregister('nomeutente');
}
//if(!isset($_SESSION[''])){  //if login in session is not set
//    header("Location: index.html");
?>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Gestione d'Impresa Balan 2017/2018</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="bootstraps.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="main.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<style>
.zoom {

    transition: transform .2s; /* Animation */
    margin: 0 auto;
}

.zoom:hover {
    transform: scale(1.5);
  }
</style>
</head>
<body>



        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #2176FF;">
                <a class="navbar-brand mb-0 h1">Elon Musk</a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                        <span class="navbar-toggler-icon"></span>
                </button>

        <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="home.php"><i class="fas fa-home"></i> Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="tpsi.php"><i class="fas fa-code"></i> TPSI</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="informatica.php"><i class="fas fa-database"></i> Informatica</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="sistemi.php"><i class="fas fa-unlock-alt"></i> Sistemi e Reti</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="gestione.php"><i class="far fa-money-bill-alt"></i> Gestione d'Impresa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="inglese.php"><i class="fas fa-car"></i> Inglese</a>
                    </li>
                    <li class="nav-item">
                        <span class="glyphicons glyphicons-font"></span>
                        <a class="nav-link" href="italiano.php"><i class="fas fa-font"></i> Italiano</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="storia.php"><i class="fas fa-globe"></i> Storia</a>
                    </li>
                    </ul>
                    <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-user-circle"></i>
                    <?php
                    echo 'Benvenuto '.$_SESSION['nomeutente'];
                    ?>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="index.html?action=logout"> Logout </a>
                    </div>
                    </li>
                </ul>
        </div>
        </nav>

<div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <h1><br>Segmentazione del mercato</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <h3>
                Per poter raggiungere più clienti possibili, Tesla ha effettuato una segmentazione del mercato per i suoi prodotti.
                <br>
                Abbiamo infatti vari modelli con costi diversi tra loro per andare incontro alle esigenze del cliente e alle sue disponibilità economiche.
            </h3>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-3 col-md-12 col-sm-12">
            <img class="mx-auto d-block img-fluid" src="img/product.png">
        </div>
        <div class="col-lg-9 col-md-12 col-sm-12">
            <h3>
            <br>
                <b>Prodotto (Product)</b>
                <br>
                Il prodotto è il bene (o servizio) che si decide di vendere in un mercato per soddisfare determinati bisogni
            </h3>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-3 col-md-12 col-sm-12">
            <img class="mx-auto d-block img-fluid" src="img/price.png">
        </div>
        <div class="col-lg-9 col-md-12 col-sm-12">
            <h3>
            <br>
                <b>Price (Prezzo)</b>
                <br>
                Il prezzo è il corrispettivo in denaro che il cliente è disposto a pagare per il bene offerto dall'azienda.
                <br>
                Questo è il punto più importante perchè si sceglie come <b>scremare il mercato, su quale operare e la scelta dei vari prezzi.</b>
                <br>
            </h3>
        </div>
    </div>
    <hr>
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <h1>
          Analisi SWOT di Tesla Motors
        </h1>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-4 col-md-12 col-sm-12">
        <h3>
          <br>
          Nella seguente analisi SWOT, Tesla si pone come obbiettivo quello di rimanere <b>competitiva</b> a livello internazionale con conseguente crescita
          del business. <br> <br>
          L'analisi SWOT (<b>Strenghts, Weaknesses, Opportunities, Threats</b>) va ad indicare 4 punti dell'azienda e se sono gestibili in termini di <b>raggiungimento
          dell'obbiettivo</b>, vengono rispettati. In caso contrario si pone un diverso obbiettivo e si ripete il processo di creazione dell'analisi.
        </h3>
      </div>
      <div class="col-lg-8 col-md-12 col-sm-12">
        <img class="zoom mx-auto d-block img-fluid" src="img/swottesla.png">
      </div>
    </div>
</div>

<footer class="page-footer font-small blue pt-4 mt-4">
  <div class="footer-copyright text-center py-3">
    © 2018 Copyright: Balan Ioan Andrei

</div>
</footer>
