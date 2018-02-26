<?php
$servername = "localhost";
$username = "root";
$password="";
$dbname="nuovo";
$conn = new mysqli($servername, $username, $password,$dbname);

$i = 0;

$sql = "SELECT ID, NOME, COGNOME, EMAIL FROM dbasl";
$result = $conn->query($sql);

echo
    ("<tr bgcolor='#d7d7d7'>>
        <th onclick='ordinamento(\"Id\");'>
            <center>
                <span class='glyphicon glyphicon-chevron-down'></span>
                N°
            </center>
        </th>
        <th onclick='ordinamento(\"nome\");'>
            <center>
                <span class='glyphicon glyphicon-chevron-down'></span>
                NOME
            </center>
        </th>
        <th onclick='ordinamento(\"cognome\");'>
            <center>
                <span class='glyphicon glyphicon-chevron-down'></span>
                COGNOME
            </center>
        </th>
        <th onclick='ordinamento(\"email\");'>
            <center>
                <span class='glyphicon glyphicon-chevron-down'></span>
                EMAIL
            </center>
        </th>
        <th><center>AGGIORNA / ELIMINA</center></th>
    </tr>");

if ($result->num_rows > 0)
{
    while($row = $result->fetch_assoc())
    {
        $ID=$row["ID"];
        $nome = $row["NOME"];
        $cognome = $row["COGNOME"];
        $email = $row["EMAIL"];

        if ($i%2==0)
        { echo ("<tr bgcolor='#ffffff'>"); }
        else
        { echo ("<tr bgcolor='#d7d7d7'>"); }
        $i++;

        echo
            ("<td align = 'center'> " .
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
                <input type = 'hidden' name = 'nome' value = '$nome' >
                <input type = 'hidden' name = 'cognome' value = '$cognome'>
                <input type = 'hidden' name = 'email' value = '$email'>
                <input type = 'hidden' name = 'Id' value = '$ID' id='identificativo'>
                <div class='btn-group'>
                    <button type = 'submit' class='btn btn-warning'>
                        <span class = 'glyphicon glyphicon-edit'></span>
                    </button>
                    <button type = 'submit' onclick='eliminazione($ID)' class='btn btn-danger'>
                        <span class = 'glyphicon glyphicon-trash'></span>
                    </button>
                </div>
            </td>
        </tr>");
    }
}
$conn->close();