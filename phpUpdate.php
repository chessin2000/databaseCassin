<?php
$Nome = htmlentities($_GET['nome']);
$Cognome = htmlentities($_GET['cognome']);
$Email = htmlentities($_GET['email']);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "nuovo";
$id = $_GET['Id'];

$conn = new mysqli($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connessione non stabilita: " . mysqli_connect_error());
}

$sql = "UPDATE dbasl SET NOME='$Nome', COGNOME='$Cognome', EMAIL='$Email' WHERE ID='$id'";

$conn->query($sql);
$conn->close();
header("Location: main.php");
?>