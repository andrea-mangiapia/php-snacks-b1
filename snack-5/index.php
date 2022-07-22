<!-- Utilizzare questo array: https://pastebin.com/CkX3680A.
Stampiamo il nostro array 
mettendo gli insegnanti in un rettangolo grigio
e i PM in un rettangolo verde. -->

<?php
 
    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 5</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="teachers">
            <ul>
                <h2>
                    Teachers
                </h2>
                <!-- Creo un ciclo for presente nell'array con indice 'teachers' -->
                <?php for($i = 0; $i < count($db['teachers']); $i++) { ?>

                    <li>
                        <!-- Stampo il teacher con il proprio name e lastname -->
                        <?php echo $db['teachers'][$i]['name'] . ' ' .$db['teachers'][$i]['lastname'] ?>
                    </li>
                <?php } ?>
            </ul>
        </div>


        <div class="pm">
            <ul>
                <h2>
                    PM
                </h2>
                <!-- Creo un ciclo for presente nell''array con indice 'pm' -->
                <?php for($i = 0; $i < count($db['pm']); $i++) { ?>

                    <li>
                        <!-- Stampo il PM con il proprio name e lastname  -->
                        <?php echo $db['pm'][$i]['name'] . ' ' .$db['pm'][$i]['lastname'] ?>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </div>
    
</body>
</html>