<?php
/*Ecrire un script qui génère une date puis indique si la date est valide ou pas 
Une date est formée d'un jour(entier), un mois(entier) et d'une année(entier) */

$j=rand(1,31);
$m=rand(1,12);
$a=rand(1800,2022);

if($m==2){
    if($a%4==0 && $a%100!=0 || $a%400==0){
        $nj=29;
    }else{
        $nj=28;
    }
}elseif($m==1 || $m==3 || $m==5 || $m==7 || $m==8 || $m==10 || $m==12){
    $nj=31;
}else{
    $nj=30;
}  
if($j<=$nj){
    $ch='valide';
}else{
     $ch="invalide";
 }
echo("$j/$m/$a est $ch");
?>