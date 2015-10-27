<?php

    class Percent
    {
        public $absolute;
        public $relative;
        public $nominal;
        public $hundred;

        public function __construct($new,$unit)
        {
            $absolute = $new/$unit;
            $relative = $absolute - 1;
            $hundred = $absolute*100;

            if($nominal > 1)
            {
                echo "positive";
            }
            elseif($nominal < 1)
            {
                echo "negative";
            }
            elseif ($nominal == 1) 
            {
                echo "status-quo";
            }
            /*
            ($nominal > 1 ? "positive");
            ($nominal < 1 ? "negative");
            ($nominal == 1 ? "status-quo");
            */
            //echo 'Welcome '.($user['is_logged_in'] ? $user['first_name'] : 'Guest').'!';
        }

        public function formatNumber($number)
        {
            return number_format($number,2);
        }
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
            
            <h1>Opdracht classes: Percent</h1>
            
        </section>
    </body>
</html>
