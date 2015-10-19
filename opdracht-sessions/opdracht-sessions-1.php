<?php
    
    session_start();

    //$lblEmail = $_SESSION['email'];
    //$lblNickname = $_SESSION['nickname'];

    
    if(isset($_GET['session']))
    {
        if ($_GET['session'] == 'destroy') 
        {
            session_destroy();
            header('location: opdracht-sessions-1.php');
        }
    }
    /*
    var_dump($_SESSION);

    if(isset($_SESSION['email']))
    {
        $lblEmail = $_SESSION['email'];
    }
    else
    {
        $lblEmail = "";
    }

    if(isset($_SESSION['nickname']))
    {
        $lblNickname = $_SESSION['nickname'];
    }
    else
    {
        $lblNickname = "";
    }*/

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
        
        <h1>Opdracht sessions: deel 1</h1>

        

                <h2>Registratiepagina</h2>

                <ul>

                    <li>Maak een formulier dat er als volgt uitziet:
                        
                        <div class="facade-minimal" data-url="http://www.app.local/opdracht-sessions-pagina-01-registratie.php">
                            <h1>Deel 1: registratiegegevens</h1>
                            <form action="opdracht-sessions-2.php" method="POST">
                                <ul>
                                    <li>
                                        <label for="email">e-mail</label>
                                        <input type="text" id="email" name="email" <?= (isset($_GET['focus'])&&$_GET['focus']=='email')?'autofocus':""; ?>>
                                    </li>
                                    <li>
                                        <label for="nickname">nickname</label>
                                        <input type="text" id="nickname" name="nickname" <?= (isset($_GET['focus'])&&$_GET['focus']=='nickname')?'autofocus':""; ?>>
                                    </li>
                                </ul>
                                <input type="submit" name="submit" value="Volgende">
                            </form>
                        </div>

                    </li>
                </ul>      
    </body>
</html>
