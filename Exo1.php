<?php
/*Ecrire un script qui génère 3 nombres entre -10 et 10 puis
 range ces nombres dans l'ordre croissant? */

 $x=rand(-10,10);
 $y=rand(-10,10);
 $z=rand(-10,10);
 $max;
 $min;
 $mil;

 if($x>$y && $x>$z){
    $max=$x;  
    if($y>$z){
        $mil=$y;
        $min=$z;
     }else{
        $mil=$z;
        $min=$y;
     } 
 }elseif($y>$x && $y>$z){
    $max=$y;
    if($x>$z){
        $mil=$x;
        $min=$z;
    }else{
        $mil=$z;
        $min=$x;
    }
 }elseif($z>$x && $z>$y){
    $max=$z;
    if($y>$x){
        $mil=$y;
        $min=$x;
    }else{
        $mil=$x;
        $min=$y;
    }
 }
 echo("$min<$mil<$max");
?>
