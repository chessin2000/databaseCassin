<?php

$server = "localhost";
$username = "root";
$password = "";
$databse = "nuovo";
$ID = $_GET['id'];
$conn =  new mysqli($server, $username, $password, $database);

$sql = "DELETE FROM dbasl WHERE ID='$id'";
if ($conn->query($sql) == TRUE)
{
    echo "Record deleted successfully";
} else
{
    echo "Error deleting record: " . $conn->error;
}

header("Location: main.php");
$conn->close();