<?php

echo ("<input type=\"text\" name=\"nome\" placeholder=\"Inserisci il nome\">
<input type=\"text\" name=\"cognome\" placeholder=\"Inserisci il cognome\">
<input type=\"email\" name=\"mail\" placeholder=\"Inserisci l'email\">
<input type=\"button\" name=\"modifica\" value=\"Modifica\">
<input type=\"button\" name=\"cancella\" value=\"Cancella\">");

$first_name = $_GET['nome'];
$last_name = $_GET['cognome'];
$email = $_GET['mail'];