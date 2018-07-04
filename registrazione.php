<?php
require 'conn.php';

$NomeUtente = $_POST["nomeutente"];
$Pass= $_POST["pass"];

$sql = "INSERT INTO utenti (NomeUtente, Pass)
VALUES ('$NomeUtente', '$Pass')";

if (mysqli_query($conn, $sql)) {
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('Utente registrato con successo');
    window.location.href='index.html';
    </script>");

} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}




mysqli_close($conn);
?>
