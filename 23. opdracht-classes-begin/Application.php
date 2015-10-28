<?php
    /*function autoload($className)
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
    }*/


    function __autoload($className)
    {
        include 'classes/'.$className.'.php';
    }

    //spl_autoload_register('__autoload'); niet nodig

    $percent = new Percent(150,100);

    class Application
    {    

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
                                        <td><?= $percent->absolute ?></td>
                                    </tr>
                                    <tr>
                                        <td>Relatief</td>
                                        <td><?= $percent->relative ?></td>
                                    </tr>
                                    <tr>
                                        <td>Geheel getal</td>
                                        <td><?= $percent->hundred ?></td>
                                    </tr>
                                    <tr>
                                        <td>Nominaal</td>
                                        <td><?= $percent->nominal ?></td>
                                    </tr>
                                </tbody>
                            </table>

        </section>
        
        
    </body>
</html>
