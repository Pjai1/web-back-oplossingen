<?php

    $fruit = "kokosnoot";
    $findme = "o";

    $fruit2 = "ananas";
    $findme2 = "a";

    $lettertje = "e";
    $cijfertje = 3;
    $langsteWoord = "zandzeepsodemineralenwatersteenstralen";

?>


<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Opdracht string extra functions</title>
        <link rel="stylesheet" href="http://web-backend.local/css/global.css">
        <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
        <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
    </head>
    <body class="web-backend-opdracht">
        
        <section class="body">
        
            <h1>Opdracht string extra functions: deel 1</h1>

            <ul>
                <li>Maak een variabele <code>$fruit</code> met <code>'kokosnoot'</code> als value</li>
                <li>Bereken hoeveel karakters de variabele fruit telt, uiteraard door middel van een PHP-functie.</li>
                <li><?= strlen($fruit) ?></li>
                <li><?= strpos($fruit,$findme) ?></li>
            </ul>
      
            <h1>Opdracht string extra functions: deel 2</h1>

            <ul>
                <li>Maak een variabele <code>fruit</code> met waarde <code>'ananas'</code></li>
                <li>Bepaal de positie van de laatste 'a' in de variabele <code>$fruit</code>.</li>
                <li><?= strpos($fruit2,$findme2,3) ?></li>
                <li><?= strtoupper($fruit) ?></li>
            </ul>
      
    		<h1>Opdracht string extra functions: deel 3</h1>

    		<ul> 
                <li>Maak een variabele <code>$lettertje</code> met <code>'e'</code> als value</li>
                <li>Maak een variabele <code>$cijfertje</code> met <code>3</code> als value</li>
                <li>Maak een variabele <code>$langsteWoord</code> met <code>'zandzeepsodemineralenwatersteenstralen'</code> als value</li>
                <li><?= str_replace($lettertje,$cijfertje,$langsteWoord) ?>
                    <p class="remark">Je mag enkel gebruik maken van de variable names. De values  <code>'e'</code>, <code>'3'</code> en <code>'zandzeepsodemineralenwatersteenstralen'</code> mogen in totaal maar één keer in het php-document voorkomen.</p>
                </li>
    		</ul>

        </section>

    </body>
</html>
