<?php
    $text = file_get_contents('gebruiker1.txt', FILE_USE_INCLUDE_PATH);

    $user1 = explode(',', $text);

    $errorLogin = "";
    $isLoggedIn = false;

    if(isset($_GET['logout']))
    {
        setcookie('user1login',"",$cookieLifetime);
        header('location: opdracht-cookies.php');
    }

    if(!isset($_COOKIE['user1login']))
    {
        if(isset($_POST['submit']))
        {
            if(isset($_POST['rememberMe']))
            {
                $cookieLifetime = time()*60*60*24*30; 
            }
            else
            {
                $cookieLifetime = time()*3600;
            }

            if($_POST['username'] == $user1[0]&&$_POST['password'] == $user1[1])
            {
                setcookie('user1login',true,$cookieLifetime);
                header('location: opdracht-cookies.php');
            }
            else
            {
                $errorLogin = "Username/password incorrect, try again.";
            }
        }
    }
    else
    {
        $isLoggedIn = true;
        $errorLogin = "Logged in. Welcome {$user1[0]}!";
    }

?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Opdracht cookies</title>
        <link rel="stylesheet" href="http://web-backend.local/css/global.css">
        <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
    </head>
    <body class="web-backend-opdracht">
    
    <section class="body">
        <h1>Opdracht cookies: deel 1</h1>

        <ul>
            <li>                  
                    <h1>Inloggen</h1>
                    <?php if($errorLogin): ?>
                        <?= $errorLogin ?>
                    <?php endif ?>

                    <?php if(!$isLoggedIn): ?>
                        <form action="opdracht-cookies.php" method="POST">
                            <ul>
                                <li>
                                    <label for="gebruikersnaam">Username</label>
                                    <input type="text" id="gebruikersnaam" name="username">
                                </li>
                                <li>
                                    <label for="paswoord">Password</label>
                                    <input type="text" id="paswoord" name="password">
                                </li>
                                <li>
                                    <label for="rememberMe">Remember Me</label>
                                    <input type="checkbox" id="rememberMe" name="rememberMe">
                                </li>
                            </ul>
                            <input type="submit" name="submit">
                        </form>
                    <?php else: ?>
                        <a href="opdracht-cookies.php?logout=true">Log Out</a>   
                    <?php endif ?>
                </div>
            </li>
    </section>
    </body>
</html>
