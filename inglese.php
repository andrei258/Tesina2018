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
    <title>Inglese Balan 2017/2018</title>
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
                    <li class="nav-item">
                        <a class="nav-link" href="informatica.php"><i class="fas fa-database"></i> Informatica</a>
                    </li>
                    <li class="nav-item">

                        <a class="nav-link" href="sistemi.php"><i class="fas fa-unlock-alt"></i> Sistemi e Reti</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="gestione.php"><i class="far fa-money-bill-alt"></i> Gestione d'Impresa</a>
                    </li>
                    <li class="nav-item active">
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
            <h1><br>Tesla's Electric Cars</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6 col-md-12 col-sm-12">
            <img class="mx-auto d-block img-fluid" src="img/tesla musk min.jpg">
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12">
            <h3>
                <br>
                <br>
                <br>
                <br>
                Elon Musk is the CEO of <b>Tesla Motors inc.</b> <br>
                It was founded on July 1st 2001. Tesla is specialized in the making of <b>electric cars, energy storage (batteries) and solar panels.</b>
                It is mostly known for its cars powered by <b>lithium batteries.</b>
            </h3>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <h3>
                Right now the Tesla models aren't affordable by everyone but one of the goals of the company is to allow everyone to buy at least one
                and we're hoping that it will happen soon.
                <br>
                The most famous product it's the <b>Model S</b> and was the world's best-selling electric car in 2015 and 2016. At the moment
                it is also the most affordable car (around 70.000~80.000 €).
            </h3>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6 col-md-12 col-sm-12">
            <img class="mx-auto d-block img-fluid" src="img/models.png">
        </div>

        <div class="col-lg-6 col-md-12 col-sm-12">
            <h3>
                <br>
                <br>
                <br>
                One of the most particular features is the autopilot but it isn't a full autopilot, it can be considered as
                an assistant that helps the user to drive. Even if this is precisely defined in the contract when the user buys a Tesla model,
                some owners consider it as a full autopilot resulting in some accidents.
            </h3>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <h3>
                As we previously said, Tesla also sells batteries. With just one full charge, five pilots drove alternatively for 1078 km at the speed of
                40 km/h. It was done in Italy, near Salerno.
                <br>
                <br>
                These cars are rechargeable at special stations that in the years are being installed more and more in every country where Tesla's cars are being sold.
            </h3>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <img class="mx-auto d-block img-fluid" src="img/tesla-chargers-1580x549.jpg">
        </div>
    </div>
</div>

<footer class="page-footer font-small blue pt-4 mt-4">
  <div class="footer-copyright text-center py-3">
    © 2018 Copyright: Balan Ioan Andrei

</div>
</footer>
