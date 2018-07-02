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
    <title>TPSI Balan 2017/2018</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="bootstraps.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<style>
img[alt="www.000webhost.com"]{display:none;}
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
                <a class="navbar-brand mb-0 h1">Elon Musk  </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                        <span class="navbar-toggler-icon"></span>
                </button>

        <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="home.php"><i class="fas fa-home"></i> Home</a>
                    </li>
                    <li class="nav-item active">
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
        <h1><br>Brief del Progetto</h1>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
      <h3>
          Questo è una progetto che parla di Elon Musk e i vari possibili collegamenti tra il suo operato e le materie studiate all'ultimo anno in un
          Istituto Tecnico Informatico
          <br>
          Sono state esposte le seguenti materie: <b>Informatica, Sistemi e Reti, Gestione Progetto, Inglese, Italiano, Storia</b> ed infine <b>TPSI</b>.
          Questo sito esiste per facilitare l'esposizione della tesina e, una volta terminato l'esame di Stato 2017/2018, verrà reso disponibile online
          a chi può averne bisogno per gli esami degli anni successivi. Anche il codice sorgente sarà reso disponibile al seguente link di <a href="https://github.com/Otoriku/Tesina2018">GitHub</a>,
          il codice sorgente è stato visibile man mano che si procedeva con la stesura di quest'ultimo con aggiornamenti settimanali. <br>
          <br>
          <b>Diretto a</b>: Studenti dell'ultimo anno dell'ITIS Informatico.
          <br> <br>
          <b>Dispositivi su cui è disponibile il sito</b>: Ogni dispositivo dotato di browser web dato che il sito è stato realizzato in modo responsive.
      </h3>
    </div>
  </div>
  <hr>
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
      <h1>
        Personas
      </h1>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-6 col-md-12 col-sm-12">
      <h3>
        <b>Nome</b>: Lorenzo
        <br>
        <b>Cognome</b>: Mossa
        <br>
        <b>Sesso</b>: Maschio
        <br>
        <b>Età</b>: 18
        <br>
        <b>Residenza</b>: Milano
        <br>
        <b>Info utili</b>: Lorenzo è uno studente di un ITIS informatico e ha le idee poco chiare su come poter strutturare un sito che gli è stato
        richiesto per la tesina e vorrebbe vedere alcuni esempi potendo visualizzare il codice.
      </h3>
    </div>
    <div class="col-lg-6 col-md-12 col-sm-12">
      <h3>
        <b>Nome</b>: Emanuele
        <br>
        <b>Cognome</b>: Barchiato
        <br>
        <b>Sesso</b>: Maschio
        <br>
        <b>Età</b>: 19
        <br>
        <b>Residenza</b>: Roma
        <br>
        <b>Info utili</b>: Emanuele, anche lui studente di un ITIS informatico, non sa cosa potrebbe portare come tesina e allora vorrebbe prendere spunto
        da internet.
    </div>
  </div>
  <hr>
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
      <h1>
        Struttura del sito
      </h1>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-6 col-md-12 col-sm-12">
      <h3>
        La tesina è stata caricata su un sito che offre hosting gratis chiamato <a href="https://www.000webhost.com">000webhost</a>, come contro può avere
        il caricamento lento delle immagini ma per quello che offre va bene. Questo ha implicato anche la scelta di mantenere uno stile minimale per evitare
        caricamenti di immagini molto fastidiosi da vedere.
        <br>
        <br>
        Per poter accedere e vedere la tesina è necessario registrarsi, il database che contiene gli utenti è molto semplice e si compone di una singola tabella
        <br>
        <b>Utenti (<u>IDUtente</u>, NomeUtente, Password)</b>
        <br>
        <br>
        Per renderlo responsive è stato usato <b>Bootstrap</b> e per permettere le sessioni, tutti i file hanno estensione <b>.php</b> (Solo le pagine
        di registrazione e di login sono <b>.html</b>).
        <br>
        <br>
        L'aggiunta di una navbar facilita la navigazione tra le varie pagine del sito e per renderla più piacevole da vedere son stati aggiunti dei <b>glyphicon</b>
        di Bootstrap e delle <b>icone</b> di Fontawesome.
      </h3>
    </div>
    <div class="col-lg-6 col-md-12 col-sm-12">
      <img class="mx-auto d-block img-fluid" src="img/sessioneinizio.png">
      <img class="mx-auto d-block img-fluid" src="img/scheletrotesti.png">
    </div>
  </div>
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
      <h3>
        <br>

        Per inserire utenti all'interno del database e controllare al momento del login che l'utente inserito esista, sono state usate funzioni <b>MySql</b>
        in quanto è il linguaggio più comune negli istituti per la realizzazione e l'interrogazione dei database. Esse sono presenti nei due file php per Login
        e Registrazione.
      </h3>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
      <img class="mx-auto d-block img-fluid" src="img/registrazione.png">
      <img class="mx-auto d-block img-fluid" src="img/login.png">
    </div>
  </div>
  <hr>
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
      <h1> Wireframe </h1>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
      <h3>
        Per il design e la posizione degli elementi nel sito è stato scelto di adottare il design pattern della <b>springboard</b>, illustrata di seguito:
      </h3>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
      <img class="zoom mx-auto img-fluid d-block" src="img/wireframe.png">
      <br>
      <br>
      <br>
      <br>
    </div>
  </div>
  <hr>
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
      <h3>
        Tutte le immagini sono state prese da internet (ad eccezione degli <b>screenshot</b> e di qualche immagine modificata situata nella pagina di <b>informatica
          e tpsi</b>), più precisamente da Google Immagini. <br>
        <br>
        Le informazioni disponibili su questo sito sono state prese da <a href="https://it.wikipedia.org/wiki/Pagina_principale"> Wikipedia </a>
        e dai <b>libri usati durante l'anno scolastico 2017-2018.</b>
      </h3>
    </div>
  </div>
</div>


<footer class="page-footer font-small blue pt-4 mt-4">
  <div class="footer-copyright text-center py-3">
    © 2018 Copyright: Balan Ioan Andrei

</div>
</footer>
