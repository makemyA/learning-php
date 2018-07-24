<?php
$web_development= [
    'frontend'=>[],
    'backend'=>[]
];
print_r($web_development);
?>
<pre>
    <?php
        $web_development['frontend']=['javascript','xhtml','css'];
        $web_development['backend']=['ruby on rails','Flash'];
        print_r($web_development);
        echo '<h3>remplacer xhtml par html et supprimer flash du tableau</h3>';
        $web_development['frontend'][1]='html';
        array_splice($web_development['backend'],1,1);
        print_r($web_development);
        ?>
</pre>