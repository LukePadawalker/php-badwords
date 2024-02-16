<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form di censura</title>
</head>
<body>
<form action="process_request.php" method="post">
    <label for="paragrafo">Inserisci il paragrafo:</label><br>
    <input type="text">
    <label for="parola">Inserisci la parola da censurare:</label><br>
    <input type="text" id="parola"><br><br>

    <input type="submit" value="Invia">
</form>


</body>
</html>
