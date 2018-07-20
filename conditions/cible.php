
<div>
<p>Merci. Nous avons pris bonne note que <span class="name"><?php echo $_POST["name"]?></span> sera <?php echo $_POST["genre"]?> pour la raison suivante:</p>    

<?php
if(isset($_POST["excuse"]) && empty($_POST["reading-excuse"])){
    echo '<p class="excuse">'.$_POST["excuse"].'</p>';
}else if (isset($_POST["reading-excuse"])){
    echo '<p class="excuse">'.$_POST["reading-excuse"].'</p>';
}
?>
<p>Son institutrice, <?php echo $_POST["classe"]?> sera prévenue de son absence.</p>
<p>Si vous constatez une erreur, veuillez corriger en cliquant sur le bouton ci-dessous</p>
<button><a href="index.php">Retour</a></button>
</div>