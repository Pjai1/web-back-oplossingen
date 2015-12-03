<?php

    $messageContainer = "";

    try
    {
        $db = new PDO('mysql:host=localhost;dbname=bieren', 'root', '', array (PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)); // Connectie maken
   
        $queryString = 'SELECT * FROM bieren INNER JOIN brouwers ON bieren.brouwernr=brouwers.brouwernr WHERE bieren.naam LIKE "Du%" AND brouwers.brnaam LIKE "%a%"';

        $statement = $db->prepare($queryString);

        $statement->execute();

        $fetchAssoc = array();

        while($row = $statement->fetch(PDO::FETCH_ASSOC))
        {
            $fetchAssoc[] = $row;
        }

        $statement->execute();

    }
    catch(PDOException $e)
    {
        $messageContainer   =   'Er ging iets mis: ' . $e->getMessage();
    }

?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Opdracht CRUD query</title>
        <link rel="stylesheet" href="http://web-backend.local/css/global.css">
        <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
        <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
    </head>
    <body class="web-backend-opdracht">

        <style>
            .voorbeeld-query-01 
            {

            }
            .voorbeeld-query-01 table
            {
                font-size:12px;
                overflow:auto;
            }

            .voorbeeld-query-01 table th,
            .voorbeeld-query-01 table td
            {
                padding:4px;
            }

            .voorbeeld-query-01 table th
            {
                background: #DFDFDF;
                text-align:center;
            }

            .voorbeeld-query-01 table tr
            {
                transition: all 0.2s ease-out;
            }

            .voorbeeld-query-01 table tr:hover
            {
                background-color:lightgreen;
            }

            .voorbeeld-query-01 .odd
            {
                background: #F1F1F1;
            }
        </style>
        
        <section class="body">
            <div class="facade-minimal voorbeeld-query-01">
            <h1>Opdracht CRUD query: deel 1</h1>

                   
                                <h1>Overzicht van de bieren</h1>

                                <table>
        
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>biernr (PK)</th>
                                            <th>naam</th>
                                            <th>brouwernr</th>
                                            <th>soortnr</th>
                                            <th>alcohol</th>
                                            <th>brnaam</th>
                                            <th>adres</th>
                                            <th>postcode</th>
                                            <th>gemeente</th>
                                            <th>omzet</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                    <?php foreach($fetchAssoc as $id => $bieren): ?>
                                        <tr class="<?php echo (($id+1)%2==0) ? '' : 'odd' ; ?>">
                                            <td>
                                                <?php echo $id ?> 
                                            </td>     
                                            <?php foreach($bieren as $value): ?>
                                                <td>
                                                    <?php echo $value ?>
                                                </td>
                                            <?php endforeach ?>
                                        </tr>
                                    <?php endforeach ?>  
                                    </tbody>
                                </table>         
        </section>  
        </div>

    </body>
</html>
