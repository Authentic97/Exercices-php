<?php
/*Ecrire un script qui génère N notes puis détermine et affiche:
-La moyenne des notes 
-La note la plus grande
-La note la plus petite 
NB: N est aussi généré et est positif  */

$x=rand(1,50);
$i=1;
$moy;
$max=0;
$min=20;
$som=0;
while($i<=$x){
    $n=rand(0,20);
    $som=$som+$n;
    if($n>$max){
        $max=$n;
    }
    if($n<$min){
        $min=$n;
    }
    $i=$i+1;
}
$moy=$som/$x;
$moy=number_format($moy,2);

echo("La moyenne est $moy <br>");
echo("Le minimum est $min <br>");
echo("Le maximum est $max");
?>