<?php
session_start();
$conn = mysqli_connect("localhost" , "id3914527_andrei1234" , "andrei1234" , "id3914527_utentitesina");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$NomeUtente = $_POST ['nomeutente'];
$Pass = $_POST ['pass'];

$result = mysqli_query ($conn, 'SELECT * FROM utenti WHERE NomeUtente="'.$NomeUtente.'" and Pass = "'.$Pass.'"');
if ( mysqli_num_rows($result) == 1){
    $_SESSION['nomeutente'] = $NomeUtente;
    header ('Location: home.php');
} else {
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('Nome utente o Password errati, riprovare');
    window.location.href='index.html';
    </script>");
}

	

?>