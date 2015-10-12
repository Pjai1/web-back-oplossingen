<?php

    $getal = 1;

    $letter = "a";
?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Opdracht conditional statements</title>
        <link rel="stylesheet" href="http://web-backend.local/css/global.css">
        <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
        <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
    </head>
    <body class="web-backend-opdracht">
        
        <section class="body">
        
            <h1>Opdracht conditional statements: deel 1</h1>

            <ul>
                <li>Maak een HTML-document met een PHP code-block</li>
                <li>
                <?php 
                    if($getal==1) echo "Het is maandag";
                    if($getal==2) echo "Het is dinsdag";
                    if($getal==3) echo "Het is woensdag";
                    if($getal==4) echo "Het is donderdag";
                    if($getal==5) echo "Het is vrijdag";
                    if($getal==6) echo "Het is zaterdag";
                    if($getal==7) echo "Het is zondag";
                     ?>
                 </li>
                <li>Bijvoorbeeld, wanneer <code>$getal</code> gelijk is aan 1 dan wordt de string <code>'maandag'</code> op het scherm getoond</li>
            </ul>  

    		<h1 class="extra">Opdracht conditional statements: deel 2</h1>

    		<ul>
                <li>Maak een kopie van deel 1</li>
    			<li>
                    <?php 
                    if($getal==1) echo strtoupper("Het is maandag");
                    if($getal==2) echo strtoupper("Het is dinsdag");
                    if($getal==3) echo strtoupper("Het is woensdag");
                    if($getal==4) echo strtoupper("Het is donderdag");
                    if($getal==5) echo strtoupper("Het is vrijdag");
                    if($getal==6) echo strtoupper("Het is zaterdag");
                    if($getal==7) echo strtoupper("Het is zondag");
                     ?>         
                </li>
                <li>
                    <?php 
                    if($getal==1) echo str_replace(strtoupper($letter),$letter,strtoupper("Het is maandag"));
                    if($getal==2) echo str_replace(strtoupper($letter),$letter,strtoupper("Het is maandag"));
                    if($getal==3) echo str_replace(strtoupper($letter),$letter,strtoupper("Het is woensdag"));
                    if($getal==4) echo str_replace(strtoupper($letter),$letter,strtoupper("Het is donderdag"));
                    if($getal==5) echo str_replace(strtoupper($letter),$letter,strtoupper("Het is vrijdag"));
                    if($getal==6) echo str_replace(strtoupper($letter),$letter,strtoupper("Het is zaterdag"));
                    if($getal==7) echo str_replace(strtoupper($letter),$letter,strtoupper("Het is zondag"));
                     ?>  
                </li>
                <li>Zet alle letters in hoofdletters, behalve de laatste 'a'
                    <?php 
                    if($getal==1) echo substr_replace(strtoupper("het is maandag"),$letter,strpos("Het is maandag",$letter,11),1);
                    if($getal==2) echo strtoupper("Het is dinsdag");
                    if($getal==3) echo strtoupper("Het is woensdag");
                    if($getal==4) echo strtoupper("Het is donderdag");
                    if($getal==5) echo strtoupper("Het is vrijdag");
                    if($getal==6) echo strtoupper("Het is zaterdag");
                    if($getal==7) echo strtoupper("Het is zondag");
                     ?>   
                </li>
    		</ul>

        </section>

    </body>
</html>
