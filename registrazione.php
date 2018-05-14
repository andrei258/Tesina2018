<?php
$conn = mysqli_connect("localhost" , "id3914527_andrei1234" , "andrei1234" , "id3914527_utentitesina");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

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
