<?php
$papa=[
    'nom'=>'Henrot',
    'prénom'=>'Pierre',
    'age'=>'64',
    'hobbies'=>[
        'art'=>'peinture',
        'sport'=>'trop vieux pour ces conneries',
        'informatique'=>'graphiste'
    ]
    ];
$moi=[
'nom'=>'Henrot',
'prénom'=>'Paul',
'age'=> '33',
'papa'=> $papa,
'hobbies'=>[
    'art' => 'guitare',
    'sport'=> 'jogging',
    'informatique'=>'dev Web'
]

];

?>
<pre>
<?php    
print_r ($moi);
?>
</pre>
<pre>
<?php    
echo $moi['nom'];
echo $moi['age'];
echo $moi['hobbies']['sport'];
?>
</pre>
<pre>
<?php
print_r($papa);
?>    
</pre>

<!-- Compter -->
<pre>
<?php
echo "le tableau papa compte ".count($papa)." éléments";
?>    
</pre>
<pre>
<?php
echo "Le tableau moi compte ".count($moi)." éléments";
?>    
</pre>
<pre>
<?php
 $var1= count($moi[hobbies]);
echo $var1;
 $var2 = count($papa[hobbies]);
echo $var2;
$var_somme=$var1+$var2;
echo "La somme des éléments des tableaux moi et papa vaut ".$var_somme;
 /* Ajouter */                  
$moi['hobbies']['autre']='taxidermie';
print_r($moi);
 /* remplacer */
 $moi['nom'] ='Dieudonné';
 print_r($moi); 
?>    
</pre>