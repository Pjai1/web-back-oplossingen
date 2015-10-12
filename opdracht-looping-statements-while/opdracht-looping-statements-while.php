<?php

    $i = 0;
    $j = 0;

    $boodschappenlijstje = array("brood","melk","boter","kaas");

?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Opdracht while</title>
        <link rel="stylesheet" href="http://web-backend.local/css/global.css">
        <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
        <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
    </head>
    <body class="web-backend-opdracht">
        
        <section class="body">  
        
        <h1>Opdracht while: deel 1</h1>

        <ul>

            <li>Druk alle getallen af van 0 tot 100 afgescheiden door een komma en 
            een spatie ' , '.
            <?php
    

                while($j <= 100)
                {
                    echo $j;
                    echo $j < 100 ? " ," : ".";
                    $j++;
                }
                    
            ?>
            </li>

            <li>Op een volgende lijn druk je alle getallen af die deelbaar zijn door 3 én groter zijn dan 40 mààr kleiner zijn dan 80.
            <?php

                while($i <= 100)
                {
                    if($i > 40 && $i < 80 && $i%3==0)
                    {
                        echo $i;
                        echo $i < 100 ? " ," : ".";
                    }
                    $i++;
                }

            ?>
            </li>

        </ul>

        <h1>Opdracht while: deel 2</h1>

        <ul>
             <li>Maak een array <code>$boodschappenlijstje</code> en plaats hierin enkele boodschapjes.</li>

            <li>Print deze boodschappen af in het HTML-gedeelte en plaats ze in <code>&lt;li&gt;</code>-elementen. Al deze <code>&lt;li&gt;</code>-elementen staan op hun beurt weer in één <code>&lt;ul&gt;</code>.
            <?php

                if(count($boodschappenlijstje>0))
                {
                    echo "<ul>\n";
                    while ($b = current($boodschappenlijstje) )
                    {
                        echo "<li>{$b}</li>\n";  
                        next($boodschappenlijstje);
                    }
                    echo "</ul>\n";
                }

            ?>
            </li>

            <li>Valideer je code met de <a href="http://validator.w3.org/">W3 Validator</a>. Dit doe je door de source-code van je document te bekijken <kbd>ctrl + u</kbd> / <kbd>⌘-Option-U</kbd>, deze te kopiëren en te plakken in de "direct input" tab.</li>

            <li>Als je code niet geldig is, maak je de nodige wijzigingen.</li>
        </ul>

    </body>
</html>
