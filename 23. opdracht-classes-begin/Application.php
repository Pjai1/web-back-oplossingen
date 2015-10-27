<?php
    function autoload($className)
    {
        $className = ltrim($className, '\\');
        $fileName  = '';
        $namespace = '';
        if ($lastNsPos = strrpos($className, '\\')) {
            $namespace = substr($className, 0, $lastNsPos);
            $className = substr($className, $lastNsPos + 1);
            $fileName  = str_replace('\\', DIRECTORY_SEPARATOR, $namespace) . DIRECTORY_SEPARATOR;
        }
        $fileName .= str_replace('_', DIRECTORY_SEPARATOR, $className) . '.php';

        require $fileName;
    }
    spl_autoload_register('autoload');

    class Application
    {    
        /*function __autoload($className)
        {
            include 'classes/'.$className.'.php';
        }

        function my_autoloader($class) {
            include 'classes/' . $class . '.class.php';
        }

        //$percent = __autoload("Percent");
        //$percent = new Percent();
        spl_autoload_register('my_autoloader');*/

        //var_dump($percent);
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
            
            <h1>Opdracht classes: Application</h1>

            <style>
                                .table-result table
                                {
                                    border:1px solid lightgrey;
                                    border-collapse:collapse;
                                    max-width:350px;
                                }

                                .table-result td
                                {
                                    border:1px solid lightgrey;
                                    padding:12px;
                                }
                            </style>
                            <table>
                                <caption>Hoeveel procent is 150 van 100?</caption>
                                <thead></thead>
                                <tfoot></tfoot>
                                <tbody>
                                    <tr>
                                        <td>Absoluut</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Relatief</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Geheel getal</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Nominaal</td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>

        </section>
        
        
    </body>
</html>
