<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "nuovo";
$conn = new mysqli($server, $username, $password, $database);

$i = 0;

$sql = "SELECT ID, NOME, COGNOME, EMAIL FROM dbasl";
$risultato = $conn->query($sql);

echo
    ("<tr bgcolor='#d7d7d7'>>
        <th onclick='ordinamento(\"id\");'>
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

if ($risultato->num_rows > 0)
{
    while($riga = $risultato->fetch_assoc())
    {
        $ID=$riga["ID"];
        $nome = $riga["NOME"];
        $cognome = $riga["COGNOME"];
        $email = $riga["EMAIL"];

        if ($i%2==0)
        { echo ("<tr bgcolor='#ffffff'>"); }
        else
        { echo ("<tr bgcolor='#d7d7d7'>"); }
        $i++;

        echo
            ("<td align = 'center'> " .
                $riga["ID"] .
            "</td>
            <td align = 'center'> " .
                $riga["NOME"] .
            "</td>
            <td align = 'center'> " .
                $riga["COGNOME"] .
            "</td>
            <td align = 'center'> " .
                $riga["EMAIL"] .
            "</td>
            <td align = 'center'>
                <input type = 'hidden' name = 'nome' value = '$nome' >
                <input type = 'hidden' name = 'cognome' value = '$cognome'>
                <input type = 'hidden' name = 'email' value = '$email'>
                <input type = 'hidden' name = 'id' value = '$ID' id='identificativo'>
                <div class='btn-group'>
                    <button style = 'height: 35px; width: 100px' class='btn btn-warning'>
                        <span class = 'glyphicon glyphicon-edit'></span>
                    </button>
                    <button style = 'height: 35px; width: 100px' onclick='eliminazione($ID)' class='btn btn-danger'>
                        <span class = 'glyphicon glyphicon-trash'></span>
                    </button>
                </div>
            </td>
        </tr>");
    }
}
$conn->close();