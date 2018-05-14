<!DOCTYPE html>
<?php
session_start();
if (isset ($_GET['logout'])){
    session_unregister('nomeutente');
}
//if(!isset($_SESSION[''])){ //if login in session is not set
//    header("Location: login.html");

?>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home page Balan 2017/2018</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="bootstrap.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="main.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>
<body>


    
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #2176FF;">
                <a class="navbar-brand mb-0 h1">Tesina</a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                        <span class="navbar-toggler-icon"></span>
                </button>

        <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="tpsi.php">TPSI</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="informatica.php">Informatica</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="sistemi.php">Sistemi e Reti</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="gestione.php">Gestione d'Impresa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="inglese.php">Inglese</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="italiano.php">Italiano</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="storia.php">Storia</a>
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
            <h1>Esame di Stato, anno scolastico 2017/2018</h1>
            <h2>Sito e tesina a cura di Andrei Balan</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 col-md-12 col-sm-12">
            <h6>Tema principale: <br>
                Elon Musk 
            </h6>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12">
            <img src="img/eloncircle.png">
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <br>
            <br>
            <br>
            <h3> <b>Elon Musk</b>, uno dei più grandi imprenditori dei nostri giorni, <br>
                  all'attuale età di 46 anni è riuscito a rivoluzionare <b>vari campi</b>, anche molto differenti tra loro, come quello dell'<b>energia
                  rinnovabile</b>, delle <b>automobili</b>, dell'<b>intelligenza artificiale</b> e addirittura dello <b>spazio</b>.  <br>
                  Elon Musk viene definito <b>visionario</b> e <b>futurista</b> grazie alle sue idee ed il suo elogio della tecnologia per 
                  spingere l'uomo verso nuove frontiere sia in senso logico che fisico (Ricordiamo che tra i suoi piani c'è quello di <b>colonizzare
                  Marte tra non molti anni</b>). <br>
                  Questo suo amore e fiducia nella tecnologia rimembra un movimento che siamo stati in grado vedere in Italia
                    agli inizi del XX secolo con il <a href="italiano.php"><b>Futurismo</b></a>. 
            </h3>
    </div>
    <div class="row">
        <div class="col-lg-6 col-md-12 col-sm-12">
            <br>
            <br>
            <br>
                <h3>Nel 1995 fonda col fratello, Kimbal Musk,<b> Zip2</b>, una piattaforma che forniva alle testate giornalistiche delle mappe
                    della città ed autorizzava dei software.
                </h3>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12">       
            <img class="imgzip" src="img/zip2.png">
        </div>  
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <h6>PayPal</h6>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <h3>
                Nel 1999, la divisione <b>Altavista</b> della <b>Compaq</b> acquista Zip2 per un'ingente somma di denaro. <br>
                Il denaro ricavato, Musk lo userà per co-fondare <b>X.com</b> (Attuale <b>PayPal</b>)  una compagnia di servizi finanziari
                online e di pagamenti via e-mail. <br>
                Questa fondazione fu rivoluzionaria anche grazie alla sicurezza offerta dai certificati online
                e dai protocolli creati e/o modificati appositamente per movimenti sicuri di denaro. <br>
                Fare <b>click</b> sull'immagine sottostante per un maggiore approfondimento:
            </h3>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <a href="sistemi.php"><img class="imgpaypal" src="img/paypal-784404_640.png"></a>
        </div>
    </div>
            

    
</div>

<footer class="page-footer font-small blue pt-4 mt-4">
    <div class="footer-copyright py-3 text-center">
        © 2018 Copyright: Balan Andrei. 
    </div>
</footer>    

</body>
</php>