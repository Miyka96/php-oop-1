<?php 
    include_once __DIR__."/class.php";
    $settimoSigillo = new Film("Il settimo Sigillo", "Ingmar Bergman", 1957, "./img/settimo_sigillo.jpg");
    $dolceVita = new Film("La dolce vita","Federico Fellini",1960,"./img/dolce_vita.jpg");
    $psycho = new Film("Psycho", "Alfred Hitchcock", 1960, "./img/psycho.jpg");
    $persona = new Film("Persona","Ingmar Bergman", 1966,"./img/persona.jpg");
    $lobster = new Film("The Lobster", "Jorgos Lanthimos", 2015,"./img/lobster.jpg");
    $cuculo = new Film("Qualcuno volò sul nido del cuculo", "Milos Forman", 1975, "./img/cuculo.jpeg");
    $shindler = new Film("Shindler's List", "Steven Spielberg", 1993, "./img/shindler.jpg");
    $nosferatu = new Film("Nosferatu il Vampiro", "Friedrich Wilhelm Murnau", 1922, "./img/nosferatu.jpg");
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
        <li>
            <?php echo $lobster->getFullDescription(); ?>
        </li>
        <li>
            <?php echo $cuculo->getFullDescription(); ?>
        </li>
        <li>
            <?php echo $shindler->getFullDescription(); ?>
        </li>
        <li>
            <?php echo $nosferatu->getFullDescription(); ?>
        </li>
        <br>
    </ul>
</body>
</html>