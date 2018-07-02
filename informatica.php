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
    <title>Informatica Balan 2017/2018</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="bootstraps.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="main.js"></script>
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
                    <li class="nav-item active">
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
            <h1><br>L'intelligenza artificiale (Deep Learning)</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <h3>
                L'IA creata da OpenAI per competere con il miglior giocatore al mondo di Dota 2 ha richiesto 5 mesi di sviluppo ed in una sfida pubblica,
                l'IA ha vinto. Prima ancora di andare a definire come ciò sia stato possibile dobbiamo andare a vedere il significato di <b>Intelligenza Artificiale,
                Machine Learning e Deep Learning.</b>
            </h3>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <img class="mx-auto d-block img-fluid" src="img/ingressoopenai.png">
        </div>
    </div>
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <h3>
          Un'intelligenza artificiale è il fine che si vuole raggiungere, una macchina in grado di pensare e risolvere problemi come un essere umano senza
          farlo in modo digitale (0 o 1) ma analogico (Tutti i valori compresi fra 0 e 1).
          Uno degli approcci può essere il <b>Machine Learning</b>.
          <br>
          Il Machine Learning porta una macchina a predire qualcosa. Si tratta di raccimulare grandi quantità di dati e capire di quali, la macchina ha bisogno.
          In questo modo avremo un algoritmo non completamente scritto che riuscirà a prendere da solo delle decisioni sulla base dei dati che gli abbiamo fornito.
        </h3>
      </div>
    </div>
    <hr>
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <h1>
          Deep Learning
        </h1>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6 col-md-12 col-sm-12">
        <h3>
          <br>
          <br>
          In una branca del Machine Learning abbiamo il <b>Deep Learning</b>, si basa sulle reti neurali, software in grado di emulare i neuroni.
          Alla base abbiamo una profondità delle rete neurale, ovvero una serie di <b>livelli.</b> <br> <br>
          È la maccchina stessa che <b>decide</b> come arrivare al fine imposto attravero la decisione dei <b>classificatori</b>, scelti appunto, dalla macchina. <br><br>
          Nell'immagine di fianco abbiamo un esempio di una <b>rete neurale.</b>
        </h3>
      </div>
      <div class="col-lg-6 col-md-12 col-sm-12">
        <img class="mx-auto d-block img-fluid" src="img/reteneurale.png">
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <h3>
          Andiamo ad analizzare questa rete neurale:
          <br>
          <br>
          in <b>input</b> avremo i dati che la macchina userà;
          <br>
          il <b>livello nascosto</b> si compone di diversi classificatori che sono variabili;
          <br>
          l'<b>output</b> invece è ciò che la macchina butta fuori dopo aver analizzato i dati in input e fatti passare per i classificatori.
        </h3>
      </div>
    </div>
    <hr>
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <h1>
          Le generazioni
        </h1>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <h3>
          In natura c'è il modo di pensare analogico, sempre ispirandosi alla natura, il Deep Learning ha il concetto di <b>generazioni</b>.
          <br>
          <br>
          Dato un numero di individui che avranno tutti la stessa struttura della rete neurale ma <b>con classificatori diversi</b>, avremo diversi
          tipi di approcci al problema posto.
          <br>
          <br>
          Inserendo un grado di <b>performance</b> sapremmo se un individuo ha avuto più successo di un altro.
          <br>
          <br>
          Con la stessa logica della <b>selezione naturale</b>, verranno scelti i due individui (o più) che hanno avuto il livello di performance maggiore
          ed i loro classificatori verranno mischiati diventando così <b>genitori di una successiva generazione.</b>
        </h3>
      </div>
    </div>
    <hr>
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <h1>
          Esempio
        </h1>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <h3>
          Un esempio "semplice" è stato fornito da un utente su Youtube chiamato <b>"Ivan Seidel"</b> dove ha creato un algoritmo per far imparare al dinosauro di
          Google Chrome a giocare da solo. Il progetto è presente su <b>GitHub,</b> quindi <b>open source.</b>
        </h3>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <img class="mx-auto d-block img-fluid" src="img/trexgame.png">
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <h3>
          Usando la stessa rete neurale di prima possiamo vedere come funzioni questa tecnica di apprendimento
        </h3>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6 col-md-12 col-sm-12">
        <img class="mx-auto d-block img-fluid" src="img/reteneuraletrex.png">
      </div>
      <div class="col-lg-6 col-md-12 col-sm-12">
        <img class="mx-auto d-block img-fluid" src="img/trexinput.png">
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6 col-md-12 col-sm-12">
        <h3>
          <br>
          <br>
          Dunque, in base ai valori letti in input, essi saranno processati nel <b>livello (o layer) nascosto</b> della rete neurale, e la macchina, in questo caso,
          <b>deciderà</b> se premere la <b>freccia in su per saltare oltre l'ostacolo</b> o se abbassarsi con la <b>freccia in giù per evitare un altro tipo di ostacolo</b> mostrato
          nell'immagine accanto:
        </h3>
      </div>
      <div class="col-lg-6 col-md-12 col-sm-12">
        <img class="mx-auto d-block img-fluid" src="img/trexfly.png">
      </div>
    </div>

</div>


<footer class="page-footer font-small blue pt-4 mt-4">
  <div class="footer-copyright text-center py-3">
    © 2018 Copyright: Balan Ioan Andrei

</div>
</footer>
