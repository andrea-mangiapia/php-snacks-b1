<!-- Creare un array con 15 numeri casuali,
tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 3</title>
</head>
<body>
    

<?php
// Creo una variabile con un array vuoto che conterrà i numeri causali
$arrayNumbers = [];

// Creo un ciclo while che ha lo scopo di creare numeri random per una lunghezza massima del'array (in questo caso 15)
while(count($arrayNumbers) < 15){
    // Genero un numero random tra 1 e 100
    $randomNumber = rand(1,100);
    // pusho il numero random creato nell'array se non è già presente
    if(!in_array($randomNumber, $arrayNumbers)){
        $arrayNumbers[] = $randomNumber;
    }
}
// Stampo i valori della variabile
var_dump($arrayNumbers);
?>

</body>
</html>