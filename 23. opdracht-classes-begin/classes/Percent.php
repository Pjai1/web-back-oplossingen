<?php

    class Percent
    {
        public $absolute;
        public $relative;
        public $nominal;
        public $hundred;

        public function __construct($new,$unit)
        {
            $this->absolute = $this->formatNumber($new/$unit);
            $this->relative = $this->formatNumber($this->absolute-1);
            $this->hundred = $this->formatNumber($this->absolute*100);

            if($this->absolute > 1)
            {
                $this->nominal = "positive";
            }

            if($this->absolute < 1)
            {
                $this->nominal = "negative";
            }
            
            if ($this->absolute == 1) 
            {
                $this->nominal = "status-quo";
            }
        }

        public function formatNumber($number)
        {
            return number_format($number,2);
        }
    }

?>
<!--<!doctype html>
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
</html>!-->
