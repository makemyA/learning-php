<?php 
$maladie="maladie";
$deces ="déces du chat du voisin";
$activity="j'ai piscine";
$greve="La sncb...";



$chambre_est_sale= false;
$etat_chambre= "en ordre";
echo "<h1>0. Représente en code le fait de devoir ranger sa chambre si elle est sale.</h1>";
echo $chambre_est_sale;
if($etat_chambre == "dégoutante"){
    echo "BEURRKKKK quel gros dégueulasse! On ne t'as pourtant pas élevé comme ça";
} else if($etat_chambre == "sale"){
echo "Ca ne te dérange pas de vivre dans toute cette crasse";
}else if($etat_chambre =="en ordre"){
echo "Super, on voit que tu muris, ta chambre est presque rangée";
}else if($etat_chambre =="immaculée"){
echo "Quel ange, tu as tout nettoyé!!!";
}else if($etat_chambre =="maniaque"){
echo "Il serait peut-être temps que tu te fasses des amis non?";
}
?>

<?php 
/* 
Si l'heure est entre 05h00 et 9h00 du matin, affiche "Bonjour!".
Si l'heure est entre 9h01 et 12h00, affiche "Bonne journée!".
Si l'heure est entre 12h01 et 16h00, affiche "Bon après-midi!".
Si l'heure est entre 16h01 et 21h00, affiche "Bonne soirée!".
Si l'heure est entre 21h01 et 04h59, affiche "Bonne nuit!".

Astuce: Exploite le fait que l'on puisse combiner des conditions (via les opérateurs AND / OR).
 */
$heure= 12;
/* $minutes= 0; */

echo "<h1>1. Affiche un message de salutation différent selon l'heure courante.</h1>";
echo $chambre_est_sale;
if($heure>=5 && $heure <=9){
    echo 'Bonjour, il est '.$heure, ' heures, Il est temps de se lever';
} else if($heure >9&&$heure<12){
echo "Il est ".$heure, ' heures, pause café quand tu veux';
}else if($heure >12&&$heure<=16 ){
echo "Il est ".$heure, " heures, Soit tu manges, soit j'te mange mais va falloir trouver une solution";
}else if($heure >16 && $heure <21){
echo "Il est ".$heure, " heures, rentreeeeee chezzz toiiiii!!!";
}else {
echo "Il est déjà ".$heure," heures, Il faudrait penser à couper ton pc mon ami";
}   
?>

 