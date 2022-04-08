<?php 
    include_once __DIR__."/class.php";
    $settimoSigillo = new Film("Il settimo Sigillo", "Ingmar Bergman", 1957, "./img/settimo_sigillo.jpg");
    $dolceVita = new Film("La dolce vita","Federico Fellini",1960,"./img/dolce_vita.jpg");
    $psycho = new Film("Psycho", "Alfred Hitchcock", 1960, "./img/psycho.jpg");
    $persona = new Film("Persona","Ingmar Bergman", 1966,"./img/persona.jpg");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <ul>
        <li>
            <?php echo $settimoSigillo->getFullDescription();?>  
        </li>
        <li>
            <?php echo $dolceVita->getFullDescription();?> 
        </li>
        <li>
            <?php echo $psycho->getFullDescription(); ?>
        </li>
        <li>
            <?php echo $persona->getFullDescription(); ?>
        </li>
        <br>
    </ul>
</body>
</html>