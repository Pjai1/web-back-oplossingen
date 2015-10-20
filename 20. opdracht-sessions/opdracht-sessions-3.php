<?php

    session_start();

    var_dump($_SESSION);
    var_dump($_POST);

    if(isset($_POST['submit']))
    {
        $_SESSION['straat'] = $_POST['straat'];
        $_SESSION['nummer'] = $_POST['nummer'];
        $_SESSION['gemeente'] = $_POST['gemeente'];
        $_SESSION['postcode'] = $_POST['postcode'];
    }

/*
    if(isset($_POST['submit']))
    {
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['nickname'] = $_POST['nickname'];
    }

    $lblStraat = $_SESSION['straat'];
    $lblNummer = $_SESSION['nummer'];
    $lblGemeente = $_SESSION['gemeente'];
    $lblPostcode = $_SESSION['postcode'];*/

?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Opdracht sessions</title>
        <link rel="stylesheet" href="http://web-backend.local/css/global.css">
        <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
    </head>
    <body class="web-backend-opdracht">
        
        <h1>Opdracht sessions: deel 3</h1>

                <h2>Overzichtspagina</h2>

                    <ul>
                        <li>Deze pagina bevat alle gegevens die in de voorgaande pagina's ingevuld zijn. Deze ziet er als volgt uit: 
                            
                            <div class="facade-minimal" data-url="http://www.app.local/opdracht-sessions-pagina-03-overzicht.php">
                        
                                <h1>Overzichtspagina</h1>

                                <ul>
                                    <li><?=  $_SESSION['email'] ?></li>
                                    <li><a href="opdracht-sessions-1.php?focus=email">Amend</a></li>
                                    <li><?= $_SESSION['nickname'] ?></li>
                                    <li><a href="opdracht-sessions-1.php?focus=nickname">Amend</a></li>
                                    <li><?=  $_SESSION['straat'] ?></li>
                                    <li><a href="opdracht-sessions-2.php?focus=straat">Amend</a></li>
                                    <li><?= $_SESSION['nummer'] ?></li>
                                    <li><a href="opdracht-sessions-2.php?focus=nummer">Amend</a></li>
                                    <li><?=  $_SESSION['gemeente'] ?></li>
                                    <li><a href="opdracht-sessions-2.php?focus=gemeente">Amend</a></li>
                                    <li><?= $_SESSION['postcode'] ?></li>
                                    <li><a href="opdracht-sessions-2.php?focus=postcode">Amend</a></li>
                                </ul>
                            </div>
    </body>
</html>
