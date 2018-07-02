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
    <title>Sistemi e Reti Balan 2017/2018</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="bootstraps.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="main.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<style>img[alt="www.000webhost.com"]{display:none;}
@import url('https://fonts.googleapis.com/css?family=Francois+One');
 h1{
   font-family: 'Francois One', sans-serif;
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
                    <li class="nav-item active">

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
            <h1><br>Protocollo TLS/SSL</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <h3>
            Questi protocolli sono dei <b>protocolli crittografici</b> usati nel campo dell'informatica che permettono una comunicazione sicura
            dalla sorgente al destinatario <b>(end-to-end)</b> fornendo <b>autenticazione, integrità dei dati e cifratura.</b>
            Vengono spesso affiancati dal protocollo HTTPS. Il <b>TLS (Transport Layer Security)</b> è la versione più sicura ed avanzata dell'<b>SSL (Secure Sockets Layer).</b>
            </h3>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 col-md-12 col-sm-12">
            <h3>
                <br>
                <br>
                <br>
                <br>
            Questo protocollo utilizza una cifratura <b>ibrida</b>, cioè lo scambio di chiavi avviene attraverso la cifratura <b>asimmetrica</b>
            e lo scambio del messaggio avviene attraverso quella <b>simmetrica.</b>
            <br>
            Difatti si divide in queste <b>3 fasi:</b>
            <br>
            <br>
            • Negoziazione fra le parti dell'algoritmo da utilizzare;
            <br>
            • Scambio delle chiavi ed autenticazione;
            <br>
            • Cifratura simmetrica per lo scambio dei messaggi.
            </h3>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12">
            <img class="mx-auto d-block img-fluid" src="img/1362-img1F.gif">
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <h3>
                I siti devono dimostrare di possedere un protocollo <b>SSL affidabile</b> e ciò viene permesso attraverso i <b>certificati SSL</b>.
                Questi certificati vengono emessi da <b>enti certificatori</b> che a loro volta hanno un livello superiore dove loro stessi vengono
                certificati e considerati affidabili. Per capire se un sito ha il certificato SSL basta vedere se vicino all'URL del sito su cui ci
                troviamo ha il simbolo del <b>lucchetto.</b>
            </h3>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12">
            <img class="mx-auto d-block img-fluid" src="img/sslscreen.png">
        </div>
    </div>
    <hr>
    <div class="row">
      <div class="col-lg-6 col-md-12 col-sm-12">
        <img class="mx-auto d-block img-fluid" src="img/chrome_2018-07-02_15-48-11.png">
      </div>
      <div class="col-lg-6 col-md-12 col-sm-12">
        <img class="mx-auto d-block img-fluid" src="img/certificato2.png">
      </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-lg-2 col-md-4 col-sm-6">
            <img class="mx-auto d-block img-fluid" src="img/pubblicazionissl.png">
        </div>
        <div class="col-lg-10 col-md-8 col-sm-6">
            <h3>
            <br>
            <br>
                Il TLS è andato a sostituire l'SSL che si è rivelato nel corso degli anni obsoleto e vulnerabile a determinati attacchi come il <b>POODLE</b>.
                Questo tipo di attacco sfrutta le vulnerabilità dell'<b>SSL 3.0</b> che, se sfruttato con successo, all'attaccante basta inviare <b>256 SSL 3.0 richieste</b>
                per rivelare 1 byte dei messaggi criptati. <br>
                Dal giugno del 2015, il protocollo SSL è stato proibito per essere definitivamente sostituito dal TLS. Dal <b>30 giugno 2018</b> invece, tutti gli utilizzatori
                del TLS 1.0 dovranno migrare alla <b>versione TLS 1.1</b> o superiore.
            </h3>
        </div>
    </div>
</div>


<footer class="page-footer font-small blue pt-4 mt-4">
  <div class="footer-copyright text-center py-3">
    © 2018 Copyright: Balan Ioan Andrei

</div>
</footer>
