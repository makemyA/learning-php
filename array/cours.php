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
    $toi =[
    'nom'=>'Roberts',
    'prénom'=>'Julia',
    'age'=>'33',
    'hobbies'=>[
        'art'=>'actrice',
        'sport'=>'jogging',
        'informatique'=>"Qu'est ce que c'est que ça?"
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

<!-- Créer un tableau à partir de deux tableaux (ou plus) attribut de $moi +$toi = $baby -->
<pre>
    <!-- Intersection-->
    <h3>Intersection de tableaux</h3>
    <?php
        print_r ($moi);
        print_r($toi);
        function myFunction_key($a,$b){
            if($a===$b){
                return 0;
            }
                return($a>$b)?1:-1;
        }
        function myFunction_value($a,$b){
            if($a===$b){
                return 0;
            }
                return($a>$b)?1:-1;
        }      
        print_r (array_udiff_uassoc($moi,$toi,"myFunction_key","myFunction_value"));
        $interection = array_uintersect_uassoc($moi,$toi,"myFunction_key","myFunction_value");
        $intersection_hobbies= array_uintersect_uassoc($moi[hobbies],$toi[hobbies],"myFunction_key","myFunction_value");
        print_r($interection);
        print_r($intersection_hobbies);
        echo "<h3>La fonction merge ne garde que la valeur du 2 eme tableau si les 2 tableaux possèdent les même clés</h3>";
        print_r(array_merge($toi['hobbies'], $moi['hobbies']));
        print_r(array_merge($moi[hobbies],$toi[hobbies]));
    ?>
</pre>

