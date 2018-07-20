<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css" />
    <title>Appli excuse</title>
</head>
<body>
    <h1>Formulaire d'absence</h1>
<h3>Merci de compléter le formulaire en cas d'absence de votre enfant</h3>
   <div><?php include ("excuse.php"); ?></div>
    <?php
    if(isset($_POST["excuse"])== true){
        include ("cible.php");
    }else {

    }
    ?>
</body>
</html>