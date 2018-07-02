<?php
session_start();
if (isset ($_GET['logout'])){
    session_unregister('nomeutente');
}
?>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Storia Balan 2017/2018</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="bootstraps.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<style>img[alt="www.000webhost.com"]{display:none;}</style>
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
                    <li class="nav-item">
                        <a class="nav-link" href="gestione.php"><i class="far fa-money-bill-alt"></i> Gestione d'Impresa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="inglese.php"><i class="fas fa-car"></i> Inglese</a>
                    </li>
                    <li class="nav-item">
                        <span class="glyphicons glyphicons-font"></span>
                        <a class="nav-link" href="italiano.php"><i class="fas fa-font"></i> Italiano</a>
                    </li>
                    <li class="nav-item active">
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
        <h1><br>Corsa allo spazio e sbarco sulla luna</h1>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
      <h3>
        La <b>corsa allo spazio</b> è uno degli aspetti che assunse la <b>guerra fredda</b> tra Stati Uniti ed Unione Sovietica.
        Le due superpotenze si sfidarono nella rincorsa a sempre maggiori successi spaziali nel lancio di <b>missili,
        satelliti, nella conquista della Luna e di pianeti del sistema solare,</b> nel periodo compreso all'incirca tra
        il 1957 e il 1975, cercando di prevalere l'uno sull'altro.
      </h3>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
      <img class="mx-auto d-block img-fluid" src="img/neilarmstrong.jpg">
    </div>
  </div>
  <hr>
  <div class="row">
    <div class="col-lg-6 col-md-12 col-sm-12">
      <h3>
        <br>
        <br>
        Il <b>4 ottobre 1957</b>, l'Unione sovietica lanciò con successo lo <b>Sputnik 1</b>, il primo satellite ad essere messo in orbita attorno alla terra.
        Questa fu la data che segnò l'inizio della corsa allo spazio.
        <br>
        Gli Sati Uniti intervenirono subito per rimediare alla inferiorità nel campo tecnologico spaziale con diverse iniziative, tra cui la costituzione della <b>NASA</b>,
        <br>
        L'evento dello Sputnik 1 fu molto importante per un paese che si stava riprendendo dalla guerra e fu molto incoraggiante per il popolo vedere
        i progressi tecnici del paese.
        <br>
        Gli Stati Uniti per recuperare fece degli sforzi enormi tra cui anche il rinnovo dei programmi scolastici, questa reazione è nota come: <b>Crisi Sputnik</b>.
      </h3>
    </div>
    <div class="col-lg-6 col-md-12 col-sm-12">
      <img class="mx-auto d-block img-fluid" src="img/russiasputnik.jpg">
    </div>
  </div>
  <hr>
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
      <h3>
        Dopo vari tentativi di mandare esseri viventi nello spazio (Tra cui: <b>moscerini, cani, tartarughe e scimpanzè africani</b>), entrambe le superpotenze inviarono
        sonde <b>senza equipaggio</b> sul suolo lunare già dal <b>1959</b> senza però riuscire ad effettuare un atterraggio controllato. Nel <b>1966</b> ci fu
        invece il primo atterraggio controllato.
        <br>
        <br>
        Il presidente <b>John Kennedy</b> cercò un progetto che catturasse l'attenzione collettiva e ci riuscì con lo <b>sbarco sulla luna</b> il 20 luglio 1969.
        <b>Neil Armstrong</b> fu il primo essere umano a mettere piede sulla Luna. Il primo uomo nello spazio invece fu dell'Unione Sovietica.
        <br>
        <br>
        Per alcuni la corsa allo spazio fu vinta dagli Stati Uniti con lo sbarco sulla Luna mentre per altri vinse l'Unione Sovietica con il primo uomo nello spazio.
      </h3>
    </div>
  </div>
</div>


<footer class="page-footer font-small blue pt-4 mt-4">
  <div class="footer-copyright text-center py-3">
    © 2018 Copyright: Balan Ioan Andrei

</div>
</footer>
