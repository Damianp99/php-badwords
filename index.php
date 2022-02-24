<?php
/*
Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall'utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare.
*/

$paragraph = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum laborum amet nemo, repellendus consequatur inventore aut cupiditate sapiente repudiandae veniam tempora maiores, voluptates velit tempore ipsum officia pariatur, illo cumque.Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum laborum amet nemo, repellendus consequatur inventore aut cupiditate sapiente repudiandae veniam tempora maiores, voluptates velit tempore ipsum officia pariatur, illo cumque.Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum laborum amet nemo, repellendus consequatur inventore aut cupiditate sapiente repudiandae veniam tempora maiores, voluptates velit tempore ipsum officia pariatur, illo cumque.";


$word =  $_GET ? $_GET['word'] : '';

$deleted = "***";



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <!-- PARAGRAFO INTEGRALE -->
        <div>
            <p><?php  echo $paragraph?>  <span><?php echo strlen($paragraph) ?></span></p>
        </div>
        <!-- FORM TRAMITE CUI INVIAMO LA PAROLA DA CENSURARE -->
        <div>
            <form action="index.php" method="GET">
                <input type="text" name="word" placeholder="Inserisci una parola da censurare">
                <button type="submit">Invia</button>

            </form>
        </div>
        <!-- NUOVO PARAGRAFO CON LA PAROLA CENSURATA -->
        <div>
            <p><?php  echo str_replace($word,$deleted,$paragraph)?>  <span><?php echo strlen($paragraph) ?></span></p>
        </div>
        
    </main>
</body>
</html>