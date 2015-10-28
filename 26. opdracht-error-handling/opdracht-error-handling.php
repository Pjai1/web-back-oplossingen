<?php

    session_start();

    $isValid = false;

    try
    {
        if(isset($_POST['submit']))
        {
            if(isset($_POST['code']))
            {
                if(strlen($_POST['code']) != 8)
                {
                    throw new Exception('VALIDATION-CODE-LENGTH');
                }
                else
                {
                    $isValid = true;
                }
            }
            else
            {
                throw new Exception('SUBMIT-ERROR');
            }
        }
    }
    catch(Exception $e)
    {
        $messageCode = $e->getMessage();//methode om de Exception message te pakken te krijgen
        $message = array();
        $createMessage = false;

        switch ($messageCode) 
        {
            case 'SUBMIT-ERROR':
                $message['type'] = 'error';
                $message['text'] = 'Het juiste veld ontbreekt';
                break;

            case 'VALIDATION-CODE-LENGTH':
                $message['type'] = 'error';
                $message['text'] = 'De kortingscode heeft niet de juiste lengte';  
                $createMessage = true;  
                break;
        }

        if($createMessage)
        {
            createMessage($message);
        }

        logToFile($message);
    } 

    $message = showMessage();

    function createMessage($message)
    {
        $_SESSION['message']['type'] = $message['type'];
        $_SESSION['message']['message'] = $message['text'];
    }

    function showMessage()
    {
        if(isset($_SESSION['message']))
        {
            $type = $_SESSION["message"]["type"];
            $message = $_SESSION["message"]["message"];
            unset($_SESSION['message']);

            return $type.": ".$message;
        }
        else
        {
            return false;
        }
    }

    function logToFile($input)
    {
        $errorMessage = '['.date('H:i:s',time()).']'.' - '.$_SERVER['REMOTE_ADDR'].' - type:['.$input['type'].'] '.$input['text']."\n\r";
    
        file_put_contents('log.txt', $errorMessage, FILE_APPEND);
    }

?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Opdracht error handling: try catch</title>
        <link rel="stylesheet" href="http://web-backend.local/css/global.css">
        <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
        <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
    </head>
    <body class="web-backend-opdracht">
        
        <section class="body">
        
			<h1>Opdracht error handling: try catch: deel 1</h1>

			<ul>
                    <div class="facade-minimal" data-url="http://www.app.local/application.php">
                        <h1>Geef uw kortingscode op</h1>
                        <?php if($message): ?>
                            <?= $message ?>
                        <?php endif ?>    

                        <?php if(!$isValid): ?>
                        <form action="opdracht-error-handling.php" method="POST">
                            <ul>
                                <li>
                                    <label for="code">Kortingscode</label>
                                    <input type="text" id="code" name="code">
                                </li>
                            </ul>
                            <input type="submit" name="submit">
                        </form>
                    <?php else: ?>
                        <?= "Korting aanvaard" ?>
                    <?php endif ?>    
                    </div>
			</ul>
		</section>

    </body>
</html>
