<?php

    $dieren = array("kat","hond","vis","paard","kever");
    $dieren2 = array("kat","hond","vis","paard","kever");
    $zoogdieren = array("mot","vlieg","mug");
    $dierenLijst = array();
    $waarden = array(8, 7, 8, 7, 3, 2, 1, 2, 4);
    $waardenDup = array();

    $teZoekenDier = "kat";

?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Opdracht array functies</title> 
        <link rel="stylesheet" href="http://web-backend.local/css/global.css">
        <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
        <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
    </head>
    <body class="web-backend-opdracht">
        
        <section class="body">
            
            <h1>Opdracht array functies: deel 1</h1>

            <ul>
                <li>Maak een array waarin je meer dan 5 dieren plaatst</li>

                <li>Laat het script berekenen hoeveel elementen er in de array zitten en druk af naar het scherm: 
                <?php

                    echo count($dieren);

                ?>
                </li>

                <li>Maak het mogelijk om met een variabele <code>$teZoekenDier</code> een dier te zoeken in de array, druk tevens een gepaste boodschap af (gevonden/niet gevonden).
                <?php

                    if(in_array($teZoekenDier, $dieren))
                    {
                        echo "dier gevonden";
                    }
                    else
                    {
                        echo "dier niet gevonden";
                    }

                ?>
                </li>

            </ul> 

            <h1 class="extra">Opdracht array functies: deel 2</h1>

            <ul>
                <li>Ga verder op deel 1 (maar maak een aparte kopie voor, overschrijf het origineel niet!)</li>

                <li>Zorg ervoor dat de array volgens het alfabet gesorteerd wordt ( A -> Z )
                <?php

                    asort($dieren2);

                    foreach ($dieren2 as $key => $val) 
                    {
                        echo "$key = $val\n";
                    }

                ?>
                </li>

                <li>Maak een array <code>$zoogdieren</code> en plaats hier 3 dieren in, voeg vervolgens de 2 arrays met dieren samen in de array <code>$dierenLijst</code>
                <?php

                    $dierenLijst = array_merge($dieren2,$zoogdieren);
                    print_r($dierenLijst);

                ?>
                </li>
            </ul>


            <h1 class="extra">Opdracht array functies: deel 3</h1>

            <ul>
                <li>Maak een array met volgende waarden:
                    <p>8, 7, 8, 7, 3, 2, 1, 2, 4</p>
                </li>

                <li>Haal de duplicaten uit de array
                <?php

                    $waardenDup = array_unique($waarden);
                    print_r($waardenDup);

                ?>
                </li>

                <li>Sorteer de array van groot naar klein
                <?php

                    arsort($waarden);
                    print_r($waarden);

                ?>
                </li>

            </ul>

        </section>

    </body>
</html>
