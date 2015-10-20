<?php

    session_start();

    var_dump($_SESSION);
    var_dump($_POST);

    if(isset($_POST['submit']))
    {
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['nickname'] = $_POST['nickname'];
    }

    /*$lblStraat = $_SESSION['straat'];
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
        
        <h1>Opdracht sessions: deel 2</h1>

                <h2>Adrespagina</h2>
                        
                        <div class="facade-minimal" data-url="http://www.app.local/opdracht-sessions-pagina-02-adres.php">
                        
                            <h1>Registratiegegevens</h1>

                            <ul>
                                <li><?=  $_SESSION['email'] ?></li>
                                <li><?= $_SESSION['nickname'] ?></li>
                                <li><a href="opdracht-sessions-1.php?session=destroy">Vernietig sessie</a></li>
                            </ul>

                            <h1>Deel 2: adres</h1>
                            <form action="opdracht-sessions-3.php" method="POST">
                                <ul>
                                    <li>
                                        <label for="straat">straat</label>
                                        <input type="text" id="straat" name="straat" <?= (isset($_GET['focus'])&&$_GET['focus']=='straat')?'autofocus':""; ?>>
                                    </li>
                                    <li>
                                        <label for="nummer">nummer</label>
                                        <input type="number" id="nummer" name="nummer" <?= (isset($_GET['focus'])&&$_GET['focus']=='nummer')?'autofocus':""; ?>>
                                    </li>
                                    <li>
                                        <label for="gemeente">gemeente</label>
                                        <input type="text" id="gemeente" name="gemeente" <?= (isset($_GET['focus'])&&$_GET['focus']=='gemeente')?'autofocus':""; ?>>
                                    </li>
                                    <li>
                                        <label for="postcode">postcode</label>
                                        <input type="text" id="postcode" name="postcode" <?= (isset($_GET['focus'])&&$_GET['focus']=='postcode')?'autofocus':""; ?>>
                                    </li>
                                </ul>
                                <input type="submit" name="submit" value="Volgende">
                            </form>
                        </div>
    </body>
</html>
