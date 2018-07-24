<?php
echo "<h3>créer une boucle à partir du tableau, conjuguer chaque pronom avec le verbe coder</h3>";
$pronoms_personnels = array ('Je', 'Tu', 'Il/Elle','Nous', 'Vous', 'Elles/Ils');
echo count($pronoms_personnels);

echo '<h4>Première manière (for)</h4>';
for ($i=0; $i<count($pronoms_personnels);$i++){

    switch($pronoms_personnels[$i]){
        case 'Je':
         echo '<pre>'.$pronoms_personnels[$i].' code</pre>';
        break;
        case 'Tu':
        echo '<pre>'.$pronoms_personnels[$i].' codes</pre>';
        break;
        case 'Il/Elle':
        echo '<pre>'.$pronoms_personnels[$i].' code</pre>';
        break;
        case 'Nous':
        echo '<pre>'.$pronoms_personnels[$i].' codons</pre>';
        break;
        case 'Vous':
        echo '<pre>'.$pronoms_personnels[$i].' codez</pre>';
        break;
        case 'Elles/Ils':
        echo '<pre>'.$pronoms_personnels[$i].' codent</pre>';
        default:;
}

}

echo '<h4>Seconde manière(forEach)</h4>';

foreach($pronoms_personnels as $elem){
    switch($elem){
        case 'Je':
         echo '<pre>'.$elem.' code</pre>';
        break;
        case 'Tu':
        echo '<pre>'.$elem.' codes</pre>';
        break;
        case 'Il/Elle':
        echo '<pre>'.$elem.' code</pre>';
        break;
        case 'Nous':
        echo '<pre>'.$elem.' codons</pre>';
        break;
        case 'Vous':
        echo '<pre>'.$elem.' codez</pre>';
        break;
        case 'Elles/Ils':
        echo '<pre>'.$elem.' codent</pre>';
        default:;
}
}
?>