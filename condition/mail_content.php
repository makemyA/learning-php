
<div class="container">
    <div id ="box1" class="box">
    <p>Merci. Nous avons pris bonne note que <span class="name"><?php echo $_SESSION["name"]?></span> sera 
    <?php
    if($_SESSION["genre"]== "fille"){
        echo "absente";
    }else {
        echo "absent";
    }?> pour la raison suivante:</p>    
    </div>
    <div id ="box2" class ="box">
    <?php
    if(isset($_SESSION["excuse"]) && empty($_SESSION["reading-excuse"])){
        echo '<p class="excuse">'.$_SESSION["excuse"].'</p>';
    }else if (isset($_SESSION["reading-excuse"])){
        echo '<p class="excuse">'.$_SESSION["reading-excuse"].'</p>';
    }
    ?>
    </div>
    <div id = "box3" class="box">
        <p>Son institutrice, <?php echo $_SESSION["classe"]?> sera prévenue de son absence.</p>
    </div>
</div>