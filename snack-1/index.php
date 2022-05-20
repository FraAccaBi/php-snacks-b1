<!-- ## Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60
 -->
<?php
$Grottammare = [
    [
        'squadra1' => 'Ascoli',
        'squadra2' => 'SBT',
        'punteggio1' => 2,
        'punteggio2' => 3
    ],
    [
        'squadra1' => 'Inter',
        'squadra2' => 'Juve',
        'punteggio1' => 2,
        'punteggio2' => 3
    ]
];

//var_dump($element);
//var_dump($Grottammare['squadra1']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php 
    for ($i=0; $i < 2; $i++) { ?>
    
    <p>
        <?php  
            echo $Grottammare[$i]['squadra1'] . ' - ' . $Grottammare[$i]['squadra2'] . ' | ' . $Grottammare[$i]['punteggio1'] . ' - ' . $Grottammare[$i]['punteggio2']; 
        ?>  
    </p>
    
<?php } ?>    
    
</body>
</html>