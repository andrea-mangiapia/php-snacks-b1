<!-- Creare un array contenente qualche alunno di un’ipotetica classe. 
Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. 
Stampare Nome, Cognome e la media dei voti di ogni alunno. -->

<?php

// Creo l'array della classe con "nome, cognome e voti scolastici"
$class = [
    [
        'name' => 'Andrea',
        'lastname' => 'Bianchi',
        'grades' => [ 7, 9, 8, 7, 9, 8]
    ],
    [
        'name' => 'Maria',
        'lastname' => 'Rosa',
        'grades' => [ 6, 7, 5, 7, 7, 7]
    ],
    [
        'name' => 'Pietro',
        'lastname' => 'Verdi',
        'grades' => [ 5, 6, 6, 7, 6, 6]
    ],
]

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 6</title>
</head>
<body>

    <div>
        <h2>
            Media voto degli alunni
        </h2>
        <ol>
            <!-- Creo un ciclo for presente nell'array con indice 'class' -->
            <?php for($i = 0; $i < count($class); $i++) { ?>

                <li>
                    <!-- Stampo il name e lastname del proprio alunno con media voto -->
                    Alunno: <?php echo $class[$i]['name'] . ' ' . $class[$i]['lastname'] ?> | 
                    media voti: <?php echo averageGrade($class[$i]['grades']) ?>
                </li>
            <?php } ?>
        </ol>
    </div>

    <?php
        // Creo una funziona per calcolare la media dei voti
        function averageGrade($grade) {
            for($i = 0; $i < count($grade); $i++) {
                // Ottengo la somma dei voti che è ugale alla somma dei numeri presenti nell'array "grades"
                $sumGrades += $grade[$i];
            }
            // somma dei voti diviso numero voti per ottenere il media voto
            return $sumGrades / count($grade);
        }
    ?>
</body>
</html>
