<?php
    
    //session_start();

    $messageContainer = "";

    try
    {
        $db = new PDO('mysql:host=localhost;dbname=bieren', 'root', '', array (PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)); // Connectie maken
   
        $brouwerQueryString = 'SELECT brouwers.brouwernr,brouwers.brnaam FROM brouwers';

        $brouwerStatement = $db->prepare($brouwerQueryString);

        $brouwerStatement->execute();

        $brouwerNaam = array();

        while($row = $brouwerStatement->fetch(PDO::FETCH_ASSOC))
        {
            $brouwerNaam[] = $row;
        }

        if(isset($_GET['brouwernr']))
        {
            $bierenQueryString = 'SELECT bieren.brnaam FROM bieren WHERE bieren.brouwernr = :brouwernr';

            $bierenStatement = $db->prepare($bierenQueryString);

            $bierenStatement->bindValue(':brouwernr',$_GET['brouwernr']);
        }
        else
        {
            $bierenQueryString = 'SELECT bieren.naam FROM bieren';

            $bierenStatement = $db->prepare($bierenQueryString);
        }

        $bierenStatement->execute();

        $bierenNaam = array();

        while($row = $bierenStatement->fetch(PDO::FETCH_ASSOC))
        {
            $bierenNaam[] = $row;
        }
    }
    catch(PDOException $e)
    {
        $messageContainer = 'Er ging iets mis: ' . $e->getMessage();
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
            <h1>Opdracht CRUD query: deel 2</h1>

                   
                                <h1>Overzicht van de bieren</h1>

                                <form action="opdracht-crud-query-deel2.php" method="GET">
                                    <select name="brouwernr">
                                        <?php foreach($brouwerNaam as $id => $brouwers): ?>
                                            <option value="<?= $brouwers['brouwernr'] ?>"><?= $brouwers['brnaam']?></option>
                                        <?php endforeach ?>     
                                    </select>
                                    <input type="submit">     
                                </form>
                                <table>
                                    <thead>
                                        <th>Aantal</th>
                                        <th>naam</th>
                                    </thead>
                                    <tbody>
                                        <?php foreach($bierenNaam as $id => $bieren): ?>
                                                <tr class="<?php echo (($id+1)%2==0) ? '' : 'odd' ; ?>">
                                                    <td>
                                                        <?php echo $id ?> 
                                                    </td>     
                                                    <td>
                                                         <?php echo $bieren ?>
                                                    </td>
                                                </tr>
                                        <?php endforeach ?>
                                    </tbody>
                                </table>
        </section>  
        </div>

    </body>
</html>
