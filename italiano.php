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
    <title>Italiano Balan 2017/2018</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="bootstrap.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
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
                    <li class="nav-item active">
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
            <h1>Futurismo</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <h3>
                Il <b>Futurismo</b> è stato un movimento <b>Italiano</b> dell'inizio del <b>XX secolo</b>. I futuristi esplorarono ogni forma
                di espressione come la <b>pittura, la scultura, la letteratura</b> ed adirittura la <b>gastronomia.</b> 
                <br>
                La forma d'espressione più rilevante fu la <b>letteratura.</b> Il nome <b>"Futurismo"</b> lo si deve a <b>Filippo Tommaso Marinetti.</b>
            </h3>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
            <img class="mx-auto d-block img-fluid" src="img/Futuristi.jpg">
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
            <h3>
                <br>
                <br>
                <br>
                Questo movimento nasce in un momento di notevole fase evolutiva portata specialmente dalla scoperta di <b>nuove tecnologie</b>
                come il <b>telegrafo senza fili, la radio, gli aeroplani</b> e le prime <b>cineprese.</b>
                <br>
                Per la prima volta i continenti si potevano sentire più <b>"vicini"</b>.
                <br> <br>
                (Nell'immagine abbiamo <b>Russolo, Carrà, Marinetti, Boccioni e Severini</b>)
            </h3>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <h3>
                Tutto ha inizio con il <b>manifesto futurista</b> pubblicato da <b>Filippo Tommaso Marinetti</b> sulla rivista <b>Le Figaro</b>
                il 20 febbraio 1909 a Parigi. Nel manifesto vi erano presenti i principi della letteratura futurista dove abbiamo <b>l'esaltazione
                del futuro</b> e delle sensazioni forti legate alla velocità ed alla guerra. 
                <br>
                Per l'uomo questo fu un periodo di vittoria grazie al <b>trionfo sulla natura</b> da loro stessi dichiarato e maturò 
                l'amore per la velocità, la tecnologia, la violenza. Le strade si riempirono di macchine, di luce artificiale, le fabbriche
                diminuirono sempre di più i tempi di produzione. Era un periodo in cui l'uomo sentiva di aver <b>conquistato la tecnolgia.</b>
            </h3>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <h6>
                Filippo Tommaso Marinetti (1876 - 1944)
            </h6>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 col-md-12 col-sm-12">
            <img class="mx-auto d-block img-fluid" src="img/Filippo_Tommaso_Marinetti_1.jpg">
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12">
            <br>
            <br>
            <br>
            <h3>Tra le sue opere più famose abbiamo sicuramente <b>Zang Tumb Tumb</b>. <br>
                Pubblicata nel <b>1914</b>, si ispira all'assedio di Adrianopoli durante la guerra bulgaro-turca. Di particolare abbiamo
                le <b>parole in libertà, l'eliminazione degli articoli, avverbi e congiunzioni.</b> Oltre ai caratteri di grandezza diversa abbiamo anche 
                la presenza di molte <b>onomatopee.</b> 
                <br>
                <br>
                <br>
            </h3>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <h3><b>N.B. Prima dell'introduzione delle parole in libertà, l'esclusione della punteggiatura e l'amore per la guerra (Appoggiando anche il fascismo) avevamo anche altri due maggiori esponenti. </b></h3>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <h6>
                Aldo Palazzeschi (1885 - 1974)
            </h6>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 col-md-12 col-sm-12">
            <img class="mx-auto d-block img-fluid" src="img/Aldo_Palazzeschi_2.jpg">
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12">
            <br>
            <br>
            <h3> 
                Tra le opere di maggior nota dobbiamo ricordare <b>Rapporto sulla vittoria futurista di Trieste </b> che fu sequestrato a Trento 
                a causa degli accesi toni interventisti. <br>
                Da questo brano scaturì <b>E lasciatemi divertire</b> dove il poeta si immagina di essere davanti ad una folla costernata e scandalizzata
                dove crea l'immagine del <b>poeta clown</b> che ha perso il suo valore, la sua importanza culturale. <br>
                Venne invitato a collaborare alla rivista <b>Poesia</b> e vi pubblicherà la raccolta di poesie <b>L'incendiario</b>.
                <br>
                In seguito aderirà alla rivista toscana <b>Lacerba</b> dove erano apparse alcune sue opere (<b>Manifesto del Controdolore</b>).
                <br>
                Al momento dello scoppio della guerra, si dichiarerà neutrale giudicando retorico l'acceso interventismo che veniva propagandato dal 
                movimento futurista.
            </h3>
        </div>
    </div>


</div>

<footer class="page-footer font-small blue pt-4 mt-4">
        <div class="footer-copyright py-3 text-center">
            © 2018 Copyright: Balan Andrei. 
        </div>
</footer>    
