<?php
$arrayPays = [];
array_push($arrayPays,'Belgique','France','Portugal','Allemagne','Bulgarie','Italie','Espagne','Angleterre','Canada','Chine');
print_r($arrayPays);
?>
<h3>Générer un formulaire avec les noms de pays</h3>
<div>
<label for="get-pays">Séléctionnez un pays svp</label>
<input list ="pays" type="text" id="get-pays" name="pays" autofocus required>
<datalist id="pays">
<?php
foreach($arrayPays as $item){
    echo "<option value=".$item."></option>";
}
?>
</datalist>
</div>
<h3>Amelioration du tableau</h3>
<pre>
<?php
$arrayIso = [];
array_push($arrayIso,'BE','FR','PO','DE','BU','IT','ES','EN','CA','CH');
print_r($arrayPays);
print_r($arrayIso);
?>
</pre>
<h3>Creation du tableau global</h3>
<?php
/* $arrayPaysGlob=[[]]; */

for ($i=0;$i<count($arrayIso);$i++){
    $a = $arrayIso[$i];
    $arrayPaysGlob[$a] = $arrayPays[$i];
    echo($arrayPaysGlob[$a]);
}

print_r($arrayPaysGlob);
echo "<h3>Création du nouveau menu déroulant</h3>";
print_r($arrayPaysGlob);
foreach($arrayPaysGlob as $index => $valeur){
    echo "l'iso ".$index." correspond à ".$valeur.'<br>';
}
echo count($arrayPaysGlob);
echo '<form id="form" method="get" name="iso"><select name="iso" id="get-pays" autofocus>';
foreach($arrayPaysGlob as $index => $valeur){
  echo "<option value =".$valeur.">".$index."</option>";
}
echo '</select><button type="submit">Valider</button></form>';
?>

<?php
if(!empty($_GET["iso"])){
    echo "vous avez sélectionné le/la ".$_GET['iso'];
}


?>

   
   



