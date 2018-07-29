<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style/style.css" />
    <link rel="stylesheet" href="style/header.css" />
    <link rel="stylesheet" href="style/animations.css" />
    <title>Appli excuse</title>
</head>
<body>
    <div class="body">
        <header>
            <?php include ("header.php"); ?>
            <h1>Formulaire d'absence</h1>
        </header>
        <h3>Merci de compléter le formulaire en cas d'absence de votre enfant</h3>

        <div id="page1">

            <div id="container-1">
                    <?php include("excuse.php"); ?>
            </div>
            <div id="container-2">
            <?php
            include("cible.php");
                ?>  
            </div>
                
        </div>    
    </div>
</body>
</html>


<!-- // message
$message = '
<html>
 <head>
  <title>Super site</title>
 </head>
 <body>
  <p>Merci. Nous avons pris bonne note que '.$_POST['name'].' sera absent(e) pour la
  raison suivante : '.$_POST['excuse'].'</p>
  <p>Son institutrice, '.$_POST['classe'].' sera avertie de son absence.</p>
  <p>Bien cordialement,</p>
 </body>
</html>
';

// Pour envoyer un mail HTML, l'en-tête Content-type doit être défini
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=iso-8859-1';

// En-têtes additionnels
/* $headers[] = 'To: Paul <henrot.paul@hotmail.com'; */
$headers[] = 'From: henrot.paul@gmail.com';
$headers[] = 'Cc: henrot.paul@gmail.com';
$subject="Gestion des absences";
$to= $_POST['mail'];
// Envoi

    mail($to, $subject, $message, implode("\r\n", $headers));
    echo 'Mail envoyé';
} -->