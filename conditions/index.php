<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="header.css" />
    <link rel="stylesheet" href="animations.css" />
    <title>Appli excuse</title>
</head>
<body>
<header>
    <?php include ("header.php"); ?>
    <h1>Formulaire d'absence</h1>
</header>
<h3>Merci de compléter le formulaire en cas d'absence de votre enfant</h3>

<div id="page1">

   <div id="container-1">
        <?php include ("excuse.php"); ?>
   </div>
   <div id="container-2">
   <?php
      if(!empty($_POST["name"])){ 
         include ("cible.php");
      }else {
          include ("background.php");
      } 
       ?>  
    </div>
   
    <script src="script.js"></script>
</body>
</html>
