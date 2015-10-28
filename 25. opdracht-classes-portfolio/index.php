<?php

    function __autoload($className)
    {
        include 'classes/'.$className.'.php';
    }    

    $html = new HTMLBuilder("header-partial.php","body-partial.php","footer-partial.php");

?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Opdracht classes: portfolio</title>
        <link rel="stylesheet" href="http://web-backend.local/css/global.css">
        <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
        <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
    </head>
    <?php  $html->buildHeader() ?>
    <?php  $html->buildBody() ?>
    <?php  $html->buildFooter() ?>
</html>
