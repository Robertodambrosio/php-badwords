<!-- Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall'utente tramite parametro GET. 
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare. -->

<?php 
$frase = "Testa di cazzo";
$filtro = str_replace($_GET['parola'], "***", $frase);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>
    <h2>FRASE COMPLETA</h2>
    <p><?php echo $frase;?></p>
    <p><?php echo strlen($frase); ?></p>
    <h2>FRASE CENSURATA</h2>
    <p><?php echo $filtro; ?></p>
    <p><?php echo strlen($filtro); ?></p>
</body>
</html>