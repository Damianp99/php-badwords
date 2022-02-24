<?php
/*
Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall'utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare.
*/

$paragraph = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum laborum amet nemo, repellendus consequatur inventore aut cupiditate sapiente repudiandae veniam tempora maiores, voluptates velit tempore ipsum officia pariatur, illo cumque.";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <main>
        <div>
           
            <p><?php  echo $paragraph?>  <span><?php echo strlen($paragraph) ?></span></p>
        </div>
    </main>
</body>
</html>