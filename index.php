<?php
    $departments =  [
        02 => 'Aisne'  ,
        59 => 'Nord' ,
        60 => 'Oise' ,
        62 => 'Pas de Calais' ,
        80 => 'Sommes' 
    ];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice 6</title>
</head>
<body>

<p>
    <?php
        foreach ($departments as $cle => $name) {
            echo 'Le département ' . $name . ' a le numéro ' . $cle . '<br>' ;
        }
    ?>
</p>
    
</body>
</html>