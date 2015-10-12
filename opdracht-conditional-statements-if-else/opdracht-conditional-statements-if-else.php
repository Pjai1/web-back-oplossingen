<?php

    $jaartal = 2000;
    $getal = 221108521;

?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Opdracht if else</title> 
        <link rel="stylesheet" href="http://web-backend.local/css/global.css">
        <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
        <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
    </head>
    <body class="web-backend-opdracht">
        
        <section class="body">
        
            <h1>Opdracht if else: deel 1</h1>

            <ul>
                <li>Maak een PHP-script dat kan bepalen of de variabele 'jaartal' al dan niet een schrikkeljaar is
                    <ul>
                        <li>Een jaar is een schrikkeljaar als het deelbaar is door 4.</li>
                        <li>Een jaar is géén schrikkeljaar als het deelbaar is door 100, TENZIJ het wel deelbaar is door 400.</li>
                    </ul>
                </li>
                <?php
                /*if($jaartal%400==0)
                {
                    if($jaartal%4==0) 
                        {
                            echo "Schrikkeljaar";
                        }
                    }
                elseif($jaartal%100==0)
                {
                    echo "Geen schrikkeljaar";
                }*/

                if($jaartal%100==0 && $jaartal%400!=0)
                {
                    echo "Geen schrikkeljaar";
                }
                else
                {
                    echo "Schrikkeljaar";
                }

                ?>
            </ul>  

    		<h1 class="extra">Opdracht if else: deel 2</h1>

    		<ul>
                <li>Maak een PHP-script dat achterhaalt hoeveel volledige jaren, maanden, weken, dagen, uren, minuten en seconden er in een gegeven aantal seconden zit (bv. 221108521). Hoeft niet met if-statement.</li>

                <li>
                    Ga er van uit dat een maand 31 dagen kent en een jaar 365 dagen. Het resultaat ziet er ongeveer als volgt uit:
                    
                    <div class="facade-minimal" data-url="http://www.app.local/index.php">
                        
                        <h1>Jaren, maanden, weken, dagen, uren, minuten en seconden</h1>

                        <p>in 221108521 seconden</p>

                        <ul>
                            <li>minuten: <?php echo round($getal/60) ?></li>
                            <li>uren: <?php echo round($getal/(60*60)) ?></li>
                            <li>dagen: <?php echo round($getal/(60*60*24)) ?></li>
                            <li>weken: <?php echo round($getal/(60*60*24*7)) ?></li>
                            <li>maanden (31): <?php echo round($getal/(60*60*24*31)) ?></li>
                            <li>jaren (365): <?php echo round($getal/(60*60*24*365)) ?></li>
                        </ul>
                    </div>

                </li>
    		</ul>

        </section>

    </body>
</html>
