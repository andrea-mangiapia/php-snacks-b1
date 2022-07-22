<!-- Passare come parametri GET name, mail e age e verificare 
(cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri,
 che mail contenga un punto e una chiocciola e che age sia un numero. 
 Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

 <?php

// Passo come parametri GET name, mail e age
$name = $_GET['name'];
$mail = $_GET['mail'];
$age = $_GET['age'];

// Variabile che conterrà il messaggio per l'utente
$textAccesMessage;

// SE name è più lungo di 3 caratteri e(&&)
// SE mail contiene un punto e una chiocciola ed è diverso(!==) da false e(&&)
// SE mail contiene una chiocciola ed è diverso(!==) da false e(&&)
// SE age è un numero is_numeric = true (se viene inserito una stringa is_numeric = false)
if(strlen($name) > 3 && strpos($mail, '.') !== false && strpos($mail, '@') !== false && is_numeric($age)) {
    $textAccesMessage = 'Riuscito';
} else {
    $textAccesMessage = 'Negato';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 2</title>
</head>
<body>

    <!-- Stampo in pagina -->
    <h2>
        Accesso <?php echo $textAccesMessage; ?>
    </h2>
    
</body>
</html>