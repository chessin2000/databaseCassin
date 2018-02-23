<?php

if (isset($_GET['nome']) && isset($_GET['cognome']) && isset($_GET['email'])) {
    $Nome = htmlentities($_GET['nome']);
    $Cognome = htmlentities($_GET['cognome']);
    $Email = htmlentities($_GET['email']);
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "nuovo";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "INSERT INTO dbasl (NOME,COGNOME, EMAIL) VALUES ('$Nome', '$Cognome', '$Email')";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
    header("Location: main.php");
}
    ?>