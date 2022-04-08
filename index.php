<?php 
    include_once __DIR__."/class.php";
    $settimoSigillo = new Film("Il settimo Sigillo", "Ingmar Bergman", 1957, "./img/settimo_sigillo.jpg");
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
    <h1>Film List</h1>
    <ul>
        <li>
            <?php echo $settimoSigillo->getFullDescription();?>
        </li>
        <br>
    </ul>
</body>
</html>