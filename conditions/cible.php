


<div class="container">
    <div id ="box1" class="box">
    <p>Merci. Nous avons pris bonne note que <span class="name"><?php echo $_POST["name"]?></span> sera 
    <?php
    if($_POST["genre"]== "fille"){
        echo "absente";
    }else {
        echo "absent";
    }?> pour la raison suivante:</p>    
    </div>
    <div id ="box2" class ="box">
    <?php
    if(isset($_POST["excuse"]) && empty($_POST["reading-excuse"])){
        echo '<p class="excuse">'.$_POST["excuse"].'</p>';
    }else if (isset($_POST["reading-excuse"])){
        echo '<p class="excuse">'.$_POST["reading-excuse"].'</p>';
    }
    ?>
    </div>
    <div id = "box3" class="box">
        <p>Son institutrice, <?php echo $_POST["classe"]?> sera prévenue de son absence.</p>
        <p>Si vous constatez une erreur, veuillez corriger en cliquant sur le bouton <strong>retour</strong> ci-dessous.
        <p>Sinon, appuyez sur le bouton <strong>envoyer</strong></p>
    </div>
    <div id="ancre-button" class="container-button">
        <!-- <button id ="button-retour"class="button"><a href="index.php">Retour</a></button> -->
        <button id ="button-retour1"class="button"><a href="index.php">retour</a></button>
        <button class="button"><a href="mailto: <?php echo $_POST["mail"]?>">envoyer</a></button>
    </div>
</div>