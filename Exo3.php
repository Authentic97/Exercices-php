<?php
/*Ecrire un script qui affiche les valeurs entre 100 et 1 sachant que chaque ligne 
contient 5 nombres */
$cpt=0;
$i=100;
while($i>=1){
    echo("$i ");
    $i=$i-1;
    $cpt=$cpt+1;
    if($cpt==5){
        echo("<br>");
        $cpt=0;
    }
}

?>