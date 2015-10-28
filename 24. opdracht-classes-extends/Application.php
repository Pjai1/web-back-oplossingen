<?php

    function __autoload($className)
    {
        include 'classes/'.$className.'.php';
    }    

    $kermit = new Animal("Kermit","Male",100);
    $dikkie = new Animal("Dikkie","Fatty",90);
    $flipper = new Animal("Flipper","Female",80);

    $simba = new Lion('Simba', 'Male', 100, 'Congo Lion');
    $scar = new Lion('Scar', 'Female', 100, 'Kenia Lion');

    $zeke = new Zebra('Zeke', 'Male', 100, 'Quagga');
    $zana = new Zebra('Zana', 'Female', 100, 'Quagga');

    class Application
    {

    }

?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Opdracht classes: begin</title>
        <link rel="stylesheet" href="http://web-backend.local/css/global.css">
        <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
        <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
    </head>
    <body class="web-backend-opdracht">
        
        <section class="body">
            
            <h1>Animals</h1>
            <?= "{$kermit->getName()} is van het geslacht {$kermit->getGender()} en heeft {$kermit->getHealth()} HP. (special move: {$kermit->doSpecialMove()})" ?>
            <br>
            <?= "{$dikkie->getName()} is van het geslacht {$dikkie->getGender()} en heeft {$dikkie->getHealth()} HP. (special move: {$dikkie->doSpecialMove()})" ?>
            <br>
            <?= "{$flipper->getName()} is van het geslacht {$flipper->getGender()} en heeft {$flipper->getHealth()} HP. (special move: {$flipper->doSpecialMove()})" ?>

            <h1>Lions</h1>
            <?= "De special move van {$simba->getName()}(soort: {$simba->getSpecies()}) is {$simba->doSpecialMove()}."  ?>
            <br>
            <?= "De special move van {$scar->getName()}(soort: {$scar->getSpecies()}) is {$scar->doSpecialMove()}." ?>
            
            <h1>Zebras</h1>
            <?= "De special move van {$zeke->getName()}(soort: {$zeke->getSpecies()}) is {$zeke->doSpecialMove()}." ?>
            <br>
            <?= "De special move van {$zana->getName()}(soort: {$zana->getSpecies()}) is {$zana->doSpecialMove()}." ?>

        </section>
        
        
    </body>
</html>