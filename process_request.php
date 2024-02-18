<?php
// Recupera il paragrafo e la parola da censurare dal form
$paragrafo = $_GET["paragrafo"];
$parolaCensurare = $_GET["parola"];

// Stampa il paragrafo e la sua lunghezza
echo "<h2>Paragrafo originale:</h2>";
echo "<p>$paragrafo</p>";
echo "<p>Lunghezza: " . strlen($paragrafo) . "</p>";

// Censura la parola nel paragrafo
$paragrafoCensurato = str_ireplace($parolaCensurare, '***', $paragrafo);

// Stampa il paragrafo censurato e la sua lunghezza
echo "<h2>Paragrafo censurato:</h2>";
echo "<p>$paragrafoCensurato</p>";
echo "<p>Lunghezza: " . strlen($paragrafoCensurato) . "</p>";
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Risultato Censura</title>
</head>
<body>


</body>
</html>
