<!-- Prendere un paragrafo abbastanza lungo, contenente diverse frasi.
Prendere il paragrafo e suddividerlo in tanti paragrafi.
Ogni punto un nuovo paragrafo. -->

<?php
// Variabile contenente il paragrafo:
$paragraph = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vitae blandit leo, in aliquet diam. Pellentesque sagittis est turpis, nec tincidunt est mollis ornare. Donec auctor ligula ac metus placerat, vitae sagittis ligula sollicitudin. Integer lobortis erat nec mattis pulvinar. Sed neque massa, facilisis semper rutrum ac, laoreet a purus. Duis consequat ipsum vitae mi vulputate, a luctus ante eleifend. Curabitur mollis ligula in elit ultricies, et tempus diam ullamcorper. Sed condimentum, lorem nec tempor euismod, quam ligula sagittis dolor, eget scelerisque mi neque a nisi. Quisque id libero posuere, mollis nisl vitae, consectetur nisl";

// Creo variabile = con la funzione "explode" suddivido il paragrafo con parametro separatore '.' in tanti paragrafi
$pointParagraph = explode('.', $paragraph);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack-4</title>
</head>
<body>
    <h2>
        Paragrafo originale:
    </h2>

    <!-- Stampo il paragrafo originale: -->
    <p>
        "<?php echo $paragraph ?>"
    </p>

    <h2>
        Suddivisione del paragrafo in più paragrafi:
    </h2>
    
    <!--  Creo un ciclo per ogni punto presente -->
    <?php for($i = 0; $i < count($pointParagraph); $i++){ ?>
        <!-- Genero il paragrafo suddiviso -->
        <?php $singleParagraph = $pointParagraph[$i];?>
        
        <!-- Stampo il paragrafo suddiviso --> 
        <p>
            <?php echo $singleParagraph . '.' ?>
        </p>  

    <?php } ?>
    
</body>
</html>