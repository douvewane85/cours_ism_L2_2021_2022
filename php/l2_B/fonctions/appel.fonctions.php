
<?php 
/**
 * Appel des Fonctions
 */
require_once("fonctions.php");

$tab=initialize_tableau();
show_tableau($tab);

//show_tableau(initialize_tableau());

$result=search_val($tab,2);
echo"<br>";
transfert_tableau_v1($tab);

echo"<br>";
$matrice=transfert_tableau_v2($tab);
foreach ($matrice as  $tableau) {
    show_tableau($tableau);
    echo"<br>";
}