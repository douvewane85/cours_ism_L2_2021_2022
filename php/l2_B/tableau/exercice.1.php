
<?php 
/**
 * Script qui initialise un tableau d'entiers et 
 * genere une valeur val.
 * Le script verifie l'existence de la valeur val dans le tableau
 */
define("MIN",1);
define("MAX",10);
$val =rand(MIN,MAX);
$entiers=[1,5,8,9,10];

echo ("La valeur recherchée  est $val <br>");
echo ("Les valeurs du Tableau <br>");
foreach ($entiers as $value) {
    echo ("$value ");
}

$exist=false;
foreach ($entiers as $value) {
    if($value==$val){
        $exist=true;
        break;
    }
}
if($exist){
    echo ("La valeur recherchée  est $val  existe dans le Tableau<br>"); 
}else{
    echo ("La valeur recherchée  est $val  n'existe  pas dans le Tableau<br>"); 
}


