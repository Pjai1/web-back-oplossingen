<?php
    //$text = file_get_contents('gebruiker1.txt', FILE_USE_INCLUDE_PATH);
    //$content = utf8_encode($text);
    
    $getUsers = file_get_contents('gebruikers.txt'); 
    $contents = utf8_encode($getUsers); 
    $usersAcc = json_decode($contents, true); 

    $usernameMsg = "";

    var_dump($usersAcc);

    //$user1 = explode(',', $text);

    $errorLogin = "";
    $isLoggedIn = false;

    if(isset($_GET['logout']))
    {
        setcookie('userlogin',"",time()-3600);
        header('location: opdracht-cookies.php');
    }

    if(isset($_POST['submit']))
    {
        foreach ($usersAcc as $key => $value) 
        {

            if($_POST['username'] == $value['username']&&$_POST['password'] == $value['password'])
            {

                if(isset($_POST['remember']))
                {
                    $cookieLifetime = time()*60*60*24*30; 
                }
                else
                {
                    $cookieLifetime = time()*3600;
                }

                setcookie('userlogin',true,$cookieLifetime);
                header('location: opdracht-cookies.php');

                //$usernameMsg = $usersAcc[$value]['username'];
                //var_dump($usersAcc[$value]['username']);
            }
            else
            {
                $errorLogin = "Username/password incorrect, try again.";
            }
        }
    }

    if(isset($_COOKIE['userlogin']))
    {
        $isLoggedIn = true;
        $usernameMsg = $usersAcc[$_COOKIE['userlogin']]['username'];
        $errorLogin = "Logged in. Welcome {$usernameMsg}!";
    }     
    /*else
    {
        $isLoggedIn = true;
        $errorLogin = "Logged in. Welcome {$usernameMsg}!";
    }*/

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
                                    <input type="checkbox" id="remember" name="remember">
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
