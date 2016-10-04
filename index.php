<!doctype html>
<html lang="es" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Encuesta</title>
</head>
<body>
<h1>Encuesta de HLC</h1>
<form>
    <?php
    for ($pregunta = 1; $pregunta <= 5; $pregunta++){
        echo <<<PREGUNTA
        Pregunta 1
        <input type="radio" name="pr$pregunta" value="1" /> 1
        <input type="radio" name="pr$pregunta" value="2" /> 2
        <input type="radio" name="pr$pregunta" value="3" /> 3
        <input type="radio" name="pr$pregunta" value="4" /> 4
        <input type="radio" name="pr$pregunta" value="5" /> 5
        <br/>
PREGUNTA;
    }
?>

    <button type="submit">Votar</button>
</form>
</body>
</html>


