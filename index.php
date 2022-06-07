<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badwords</title>
</head>
<body>
    <?php
    $testo = " Lorem ipsum dolor sit amet consectetur, adipisicing elit. Architecto et quisquam exercitationem doloremque ad excepturi dolores unde, eos officiis, eius porro sapiente in alias temporibus dolorem voluptas. Quae, vitae illo? ";
    $filtro = $_GET['filtro'];
    $testo_corretto = str_replace("$filtro", "***", $testo);    
    ?>
    <h2> Testo :</h2>
    <p> <?php echo $testo ?> </p>
    <h2> Lunghezza testo :</h2>
    <p> <?php echo strlen($testo) ?>  caratteri.</p>
    <h2> Termine inserito :</h2>
    <p> <?php echo $filtro ?> </p>
    <h2> Paragrafo corretto :</h2>
    <p> <?php echo $testo_corretto ?> </p>
</body>
</html> 