<!DOCTYPE html>

<?php 
//genre
$female= "absente";
$male="absent";

//classe de
$classe_1= "Madame Chiffre";
$classe_2= "Madame Lettre";
$classe_3= "Madame Arnould";
$classe_4= "Madame Poutou";
$classe_5= "Madame Kaboum";



//excuse1
$maladie_1= "gros rhume";
$maladie_2= "grippe";
$maladie_3= "indigestion";
$maladie_4= "Il subit des angoisses nocturnes";
$maladie_5= "clavicule cassée";
$maladie = array($maladie_1,$maladie_2,$maladie_3,$maladie_4,$maladie_5);
shuffle($maladie);
/* print_r($maladie); */

//excuse2
$deces_1= "déces de son père";
$deces_2= "décès de sa grand-mère";
$deces_3= "décès du poisson rouge";
$deces_4= "décès du hamster nain";
$deces_5= "décès du chiwawa du voisin";
$deces = array($deces_1,$deces_2,$deces_3,$deces_4,$deces_5);
shuffle($deces);

//excuse3
$activity_1= "J'peux pas venir, j'ai piscine";
$activity_2= "Je dois garder ma petite soeur";
$activity_3= "Voyage à disneyland";
$activity_4="Répetition de musique";
$activity_5="Il pleut";
$activity=array($activity_1,$activity_2,$activity_3,$activity_4,$activity_5);
shuffle($activity);

//excuse4
$other_1= "La sncb...";
$other_2= "Son réveil ne va surement pas sonner";
$other_3= "Insomnie";
$other_4= "Il n'a pas envie";
$other_5= "La Belgique a perdu...";
$other= array($other_1,$other_2,$other_3,$other_4,$other_5) ;
shuffle($other);


//choix libre



?>

<form id ="form" class="container" method="post" >

    <fieldset class="formulaire">
        <legend>Informations sur l'enfant</legend>
        <div class="input">
           <!-- <form action=""> -->
           <label for="GET-name">Je m'appelle</label>
           <input type="text" id="GET-name" name="name" required pattern="[a-zA-Z]+\ [a-zA-Z]{3,50}" placeholder="prénom + NOM" autofocus>

        </div>
        <div class="input">
            <label for="get-genre">Je suis un(e)</label>
            <input list ="genre" type="text" name ="genre" id="get-genre" required>
            <datalist id="genre">
                <option value="garçon"></option>
                <option value="fille"></option>
            </datalist> 
             
            <!-- <select name="genre" id="get-genre" required>
                <option></option>
                <option value="<?php echo $male?>">Garçon</option>
                <option value="<?php echo $female?>">Fille</option>
            </select> -->
        <div class="input">
            <label for="get-professeur">Je suis dans la classe de</label>
            <input list="classe"type="text" name="classe" id="get-professeur" required>
            <datalist id="classe">
                <option value="<?php echo $classe_1 ?>"></option>
                <option value="<?php echo $classe_2 ?>"></option>
                <option value="<?php echo $classe_3 ?>"></option>
                <option value="<?php echo $classe_4 ?>"></option>
                <option value="<?php echo $classe_5 ?>"></option>
            </datalist>      
        </div>

        </div>
    </fieldset>
    <fieldset class="formulaire">
        <legend>Veuillez choisir un motif d'absence</legend>

        <div class="input">
            <input type="radio" id="maladie" name="excuse" value="<?php echo $maladie[0]?>" required />
            <label for="maladie" >maladie</label>
             <!-- <div>
                <select name="excuse" id="grippe">
                <option value="gros rhume">gros rhume</option>
                <option value="indigestion">indigestion</option>
                <option value="rage de dent">rage de dent</option>
                <option value="grippe">grippe</option>
                </select>
            </div> -->
        </div>

        <div class="input">
            <input type="radio" id="deces" name="excuse" value ="<?php echo $deces[0]?>" />
            <label for="deces">déces</label>
        </div>

        <div class="input">
            <input type="radio" id="activity" name="excuse" value = "<?php echo $activity[0]?>" />
            <label for="activity">Activité extra-scolaire</label>
        </div>
        <div class="input">
            <input type="radio" id="other" name="excuse" value = "<?php echo $other[0]?>"/>
            <label for="other">Autres excuses bidon</label>  
        </div>
        <div class="input">
            <input type="radio" id="get-excuse" name="excuse"/>
            <label for="get-excuse">Excuse personnalisée?</label>
            <input type="text" id="excuse-perso" name="reading-excuse"placeholder="Entrez votre texte ici" >
        </div>
        
        <div class="input">
            <label for="get-email">Je souhaite recevoir une confirmation à cette adresse</label>
            <input type="email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" id="get-email" name="mail">
        </div>
        <button id ="button-valider1"class="button" type="submit">valider</button>
      <!--   <input id ="button-valider1" class=" button" type="submit"value="valider"> -->
    </fieldset>
    
</form>
<!-- <button id ="button-valider1"class="button" type="submit">valider</button>  -->
