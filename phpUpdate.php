<?php
$nome = htmlentities($_GET['nome']);
$cognome = htmlentities($_GET['cognome']);
$email = htmlentities($_GET['email']);
$server = "localhost";
$username = "root";
$password = "";
$database = "nuovo";
$ID = $_GET['id'];

$conn = new mysqli($server, $username, $password, $database);

if (!$conn)
{
    die("Connessione non stabilita: " . mysqli_connect_error());
}

$sql = "UPDATE dbasl SET NOME='$nome', COGNOME='$cognome', EMAIL='$email' WHERE ID='$ID'";

$conn->query($sql);
$conn->close();
header("Location: main.php");