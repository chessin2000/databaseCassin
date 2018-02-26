<?php

if (isset($_GET['nome']) && isset($_GET['cognome']) && isset($_GET['email']))
{
    $nome = htmlentities($_GET['nome']);
    $cognome = htmlentities($_GET['cognome']);
    $email = htmlentities($_GET['email']);
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "nuovo";

    $conn = new mysqli($server, $username, $password, $database);

    if ($conn->connect_error)
    {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "INSERT INTO dbasl (NOME,COGNOME, EMAIL) VALUES ('$nome', '$cognome', '$email')";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else
    {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
    header("Location: main.php");
}