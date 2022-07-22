<!-- Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario.
Ogni array avrà una squadra di casa e una squadra ospite, 
punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. 
Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<?php
// Creo un array multidimensionali contenente le partite di basket
$SerieA = [
    [
        'team home' => 'Banco di Sardegna Sassari',
        'team guest' => 'Virtus Segafredo Bologna',
        'team home points' => 83,
        'team guest points' => 52,
    ],
    [
        'team home' => 'OpenJobMetis Varese',
        'team guest' => 'Allianz Pallacanestro Trieste',
        'team home points' => 64,
        'team guest points' => 73,
    ],
    [
        'team home' => 'NutriBullet Treviso Basket',
        'team guest' => 'Umana Reyer Venezia',
        'team home points' => 47,
        'team guest points' => 71,
    ],
    [
        'team home' => 'Germani Brescia',
        'team guest' => 'Dolomiti Energia Trentino',
        'team home points' => 65,
        'team guest points' => 44,
    ],
]

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 1</title>
</head>
<body>
    <h1>
        Lega Basket Serie A
    </h1>
        
    <ul>
        <!-- Creo un ciclo for che scorrerà L'array per stampare tutte le partite -->
        <?php for($i = 0; $i < count($SerieA); $i++) { ?>
            <?php $thisMatch = $SerieA[$i]; ?>
            
            <li>
                <!-- Stampiamo a schermo la partita con questo schema "Olimpia Milano - Cantù | 55-60" -->
                <?php echo $thisMatch['team home']; ?> - <?php echo $thisMatch['team guest']; ?> | 
                <?php echo $thisMatch['team home points']; ?> - <?php echo $thisMatch['team guest points']; ?>
            </li>

        <?php } ?>
    </ul>
        
    
</body>
</html>



    
