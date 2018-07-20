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

<form method="post" >

    <fieldset>
        <legend>Informations sur l'enfant</legend>
        <div>
           <!-- <form action=""> -->
           <label for="GET-name">prénom et nom de l'enfant</label>
           <input type="text" id="GET-name" name="name">
           
        </div>
        <div>
            <label for="get-genre">sexe</label>
            <select name="genre" id="get-genre">
                <option value="<?php echo $male?>">H</option>
                <option value="<?php echo $female?>">F</option>
            </select>
        <div>
            <label for="get-professeur">Classe de</label>
            <select name="classe" id="get-professeur">
                <option value="<?php echo $classe_1 ?>"><?php echo $classe_1 ?></option>
                <option value="<?php echo $classe_2 ?>"><?php echo $classe_2 ?></option>
                <option value="<?php echo $classe_3 ?>"><?php echo $classe_3 ?></option>
                <option value="<?php echo $classe_4 ?>"><?php echo $classe_4 ?></option>
                <option value="<?php echo $classe_5 ?>"><?php echo $classe_5 ?></option>
            </select>
        </div>

        </div>
    </fieldset>
    <fieldset>
        <legend>Veuillez choisir un motif d'absence</legend>

        <div>
            <input type="radio" id="maladie" name="excuse" value="<?php echo $maladie[0]?>" checked= "checked" />
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

        <div>
            <input type="radio" id="deces" name="excuse" value ="<?php echo $deces[0]?>" />
            <label for="deces">déces</label>
        </div>

        <div>
            <input type="radio" id="activity" name="excuse" value = "<?php echo $activity[0]?>" />
            <label for="activity">Activité extra-scolaire</label>
        </div>
        <div>
            <input type="radio" id="other" name="excuse" value = "<?php echo $other[0]?>"/>
            <label for="other">Autres excuses bidon</label>
            
        </div>
        <div>
            <label for="GET-excuse">Une autre excuse?</label>
            <input type="text" id="GET-excuse" name="reading-excuse">
        </div>
    </fieldset>
    <input type="submit" value ="valider">
</form>
