<?php
    session_start();

    $messageContainer = "";
    $isAMessage = false;

    /*if(isset($_POST['submit']))
    {
        $_SESSSION['brouwernaam'] = $_POST['brouwernaam'];
        $_SESSSION['adres'] = $_POST['adres'];
        $_SESSSION['postcode'] = $_POST['postcode'];
        $_SESSSION['gemeente'] = $_POST['gemeente'];
        $_SESSSION['omzet'] = $_POST['omzet'];
    }*/

    if(isset($_POST['submit']))
    {
        try
        {
            $db = new PDO('mysql:host=localhost;dbname=bieren', 'root', '');

            $brouwerQueryString = 'INSERT INTO `brouwers`(`brnaam`, `adres`, `postcode`, `gemeente`, `omzet`) Values (:brnaam,:adres,:postcode,:gemeente,:omzet)';

            $brouwerStatement = $db->prepare($brouwerQueryString);

            $brouwerStatement->bindParam(':brnaam',$_POST['brouwernaam']);
            $brouwerStatement->bindParam(':adres',$_POST['adres']);
            $brouwerStatement->bindParam(':postcode',$_POST['postcode']);
            $brouwerStatement->bindParam(':gemeente',$_POST['gemeente']);
            $brouwerStatement->bindParam(':omzet',$_POST['omzet']);

            $brouwerStatement->execute();

            $brouwerStatementId = $db->lastInsertId();

            $messageContainer = 'Brouwerij succesvol toegevoegd. Het unieke nummer van deze brouwerij is '.$brouwerStatementId;
            $isAMessage = true;
        }
        catch(PDOException $e)
        {
            $messageContainer = 'Er ging iets mis: '.$e->getMessage();
            $isAMessage = true;
        }
    }

?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Opdracht CRUD insert</title>
        <link rel="stylesheet" href="http://web-backend.local/css/global.css">
        <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
        <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
    </head>
    <body class="web-backend-opdracht">
        
        <section class="body">
            
            <h1>Opdracht CRUD insert: deel 1</h1>

            <ul>
                <li>Bouw de volgende pagina na volgens de regels van de kunst:

                    <div class="facade-minimal" data-url="http://www.app.local/index.php">
                        
                    <h1>Voeg een brouwer toe</h1>

                        <?php if($isAMessage): ?>
                                <?= $messageContainer ?>
                        <?php endif ?>

                    <form action="opdracht-CRUD-insert.php" method="POST">
                        <ul>
                            <li>
                                <label for="brouwernaam">Brouwernaam</label>
                                <input type="text" id="brouwernaam" name="brouwernaam">
                            </li>
                            <li>
                                <label for="adres">adres</label>
                                <input type="text" id="adres" name="adres">
                            </li>
                            <li>
                                <label for="postcode">postcode</label>
                                <input type="text" id="postcode" name="postcode">
                            </li>
                            <li>
                                <label for="gemeente">gemeente</label>
                                <input type="text" id="gemeente" name="gemeente">
                            </li>
                            <li>
                                <label for="omzet">omzet</label>
                                <input type="text" id="omzet" name="omzet">
                            </li>
                        </ul>
                        <input type="submit" name="submit">
                    </form>
                </div>
            </ul>
            
        </section>     
    </body>
</html>
