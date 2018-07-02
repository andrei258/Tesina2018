<!DOCTYPE html>
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
    <title>Home page Balan 2017/2018</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="bootstraps.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="main.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<style>img[alt="www.000webhost.com"]{display:none;}

h6 {
  padding-top: -3%;
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
                    <li class="nav-item active">
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
            <h1>
              <br>
              Esame di Stato
              <br>
               anno scolastico 2017/2018</h1>
            <h2>Sito e tesina a cura di Andrei Balan</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 col-md-12 col-sm-12">
            <h6>Elon Musk:
              <br>
              l'imprenditore visionario
            </h6>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12">
            <img class="mx-auto d-block img-fluid" src="img/eloncerchio.png">
        </div>
    </div>
    <hr>
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
                  Questa sua passione e fiducia nella tecnologia rimembra un movimento che siamo stati in grado vedere in Italia
                  agli inizi del XX secolo con il <a href="italiano.php"><b>Futurismo</b></a>.
                  <br>
                  <br>
                  <br>
            </h3>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <a href="sistemi.php"><img class=" mx-auto img-fluid d-block" src="img/paypal-scritta.png"></a>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-7 col-md-12 col-sm-12">
            <h3>
              <br>
              <br>
              <br>
              <br>
                Nel 1999, la divisione <b>Altavista</b> della <b>Compaq</b> acquista Zip2 (fondata con Kimbal Musk nel 1995) per un'ingente somma di denaro. <br>
                Il denaro ricavato, Musk lo userà per co-fondare <b>X.com</b> (Attuale <b>PayPal</b>)  una compagnia di servizi finanziari
                online e di pagamenti via e-mail. <br>
                Questa fondazione fu rivoluzionaria anche grazie alla sicurezza offerta dai certificati online
                e dai protocolli creati e/o modificati appositamente per movimenti sicuri di denaro come il <a href="sistemi.php"><b>protocollo TLS/SSL</b></a>. <br>

            </h3>
        </div>
        <div class="col-lg-5 col-md-12 col-sm-12">
            <a href="sistemi.php"><img class="mx-auto d-block img-fluid" src="img/paypal-logo.png"></a>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <a href="gestione.php"><img class=" mx-auto img-fluid d-block" src="img/tesla-scritta.png"></a>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-5 col-md-6 col-sm-12">
            <a href="inglese.php"><img class="mx-auto d-block img-fluid" src="img/tesla-logo.png"></a>
        </div>
            <div class="col-lg-7 col-md-6 col-sm-12">
              <h3>
                  <br>
                  <br>
                  <br>
                  Dopo aver <b>venduto</b> PayPal per <b>1,5 miliardi di dollari</b> ed aver diviso il ricavato, Elon investì
                  in <b>3 aziende</b>, una di queste fu <b>Tesla Motors</b>, nella quale investì <b>70 milioni</b> <br>
                  Tesla si distingue principalmente per le sue <a href="inglese.php"><b>macchine elettriche</b></a>.
                  <br>
                  <br>
                  <br>
                  Inoltre dobbiamo tener conto della <a href="gestione.php"><b>segmentazione del mercato</b></a> creata da Tesla per raggiungere vari tipi di clienti.
              </h3>

            </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <a href="informatica.php"><img class=" mx-auto img-fluid d-block" src="img/openai-scritta.png"></a>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-7 col-md-12 col-sm-12">
          <h3>
          <br>
          <br>
          <br>
              Nel dicembre del 2015, Elon Musk ha annunciato la fondazione di <b>OpenAI</b>, una compagnia di ricerca dell'<b>intelligenza artificiale</b> (AI: artificial intelligence) no profit.
              OpenAI mira allo sviluppo di un'intelligenza artificiale forte in modo che sia <b>sicura e benefica per l'umanità.</b>
              <br>
              Per farsi notare e farsi conoscere, OpenAI ha dedicato alcuni mesi alla creazione di un'IA in grado di competere con i migliori al mondo
              in un gioco chiamato <b>Dota 2</b>, molto popolare tra i videogiocatori.
              <br>
              La tecnica usata per l'allenamento dell'IA è stata il <a href="informatica.php>"><b>Deep Learning</b></a>.<br>
          </h3>
        </div>
        <div class="col-lg-5 col-md-12 col-sm-12">
          <a href="informatica.php"><img class="mx-auto d-block img-fluid" src="img/openai-logo.png"></a>

        </div>
    </div>
    <hr>
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <a href="storia.php"><img class=" mx-auto img-fluid d-block" src="img/spacex-scritta.png"></a>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-5 col-md-12 col-sm-12">
        <a href="storia.php"><img class="mx-auto d-block img-fluid" src="img/spacex-logo.png"></a>
      </div>
      <div class="col-lg-7 col-md-12 col-sm-12">
        <h3>
          <br>
          <br>
          <br>

          Tra le aziende in cui Elon aveva investito c'era anche SpaceX con ben <b>100 milioni di dollari</b>. Questa azienda fu fondata nel giugno 2002
          ed essa costruisce <b>lanciatori spaziali a razzo e veicoli spaziali</b> per il trasporto orbitale.
          <br>
          SpaceX è stata la prima azienda privata a riuscire ad <b>effettuare un lancio nello spazio</b>. Ricordiamo che uno degli obbiettivi di Elon Musk
          è colonizzare Marte e far diventare l'essere umano una specie <b>interplanetaria</b>. <br>
          I primi approcci con lo spazio sono iniziati durante la <a href="storia.php"><b>guerra fredda</b></a>.
        </h3>
      </div>
    </div>
</div>


<footer class="page-footer font-small blue pt-4 mt-4">
  <div class="footer-copyright text-center py-3">
    © 2018 Copyright: Balan Ioan Andrei

</div>
</footer>

</body>
</html>
</php>
