<script type="text/javascript" src="JavaScriptFunzioni.js"> </script>
<?php
$servername = "localhost";
$username = "root";
$password="";
$dbname="nuovo";
$conn = new mysqli($servername, $username, $password,$dbname);

$sql = "SELECT ID, NOME, COGNOME, EMAIL FROM dbasl";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $ID=$row["ID"];
        $nome = $row["NOME"];
        $cognome = $row["COGNOME"];
        $email = $row["EMAIL"];
        echo ("<tr>
        <td align = 'center'> " .
        $row["ID"] .
        "</td>
        <td align = 'center'> " .
        $row["NOME"] .
        "</td>
        <td align = 'center'> " .
        $row["COGNOME"] .
        "</td>
        <td align = 'center'> " .
        $row["EMAIL"] .
        "</td>
        <td align = 'center'>
        <form action ='' method='get'>
        <input type = 'hidden' name = 'nome' value = '$nome' >
        <input type = 'hidden' name = 'cognome' value = '$cognome'>
        <input type = 'hidden' name = 'email' value = '$email'>
        <input type = 'hidden' name = 'Id' value = '$ID'>
        <button type = 'submit' class='btn btn-warning'>
        <span class = 'glyphicon glyphicon-edit'></span>
        Aggiorna
        </button>
        </form>
        </td>
        <td align = 'center'>
        <button type = 'button' onclick='eliminazione($ID)' class='btn btn-danger'>
        <span class = 'glyphicon glyphicon-trash'></span>
        Elimina
        </button>
        </td>
        </tr> ");
    }
}
$conn->close();
?>