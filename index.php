<?php 
$mon_prenom= "Paul";
$mon_age = 33;
$envie_de_manger= true;
$couleur_mes_yeux= "brun";
$ma_famille = array(0 => "Pierre",1 => "Michel",2 => "Corine",3 => "JF",4 => "Nicolas");

echo "Bonjour je m'appelle ".$mon_prenom;
echo "J'ai ".$mon_age;
echo "Je n'ai pas ".$envie_de_manger;
echo 'mes yeux sont de couleurs '.$couleur_mes_yeux;
echo "les membres de ma famille s'appellent "; print_r ($ma_famille);

?>