<?php 

   /**
    * somme 2,3 et de 4 nombres
    */
//Definition
function somme(int $a ,int $b,int $c=0,int $d=0):int{
     return $a+$b+$c+$d;
}

/**
 * fonctions qui initialise un tableau de 5 entiers
 */
//Definition
function init_tab():array{
   return [12,5,-42,4,6];
}

//Appel 
   $tab=init_tab();

 /**
 * fonctions qui affiche un tableau
 */

 function show_tab(array $tab):void{
       foreach ($tab as  $value) {
            echo ("$value ");
       }
 }
 //appel
    show_tab([5,12,50]);
    show_tab(init_tab());
 /**
 * fonctions qui recherche la presence d'une valeur dans un tableau
 */

 function search_tab(array $tab,int $val):bool{
        foreach ($tab as $value) {
              if($val==$value){
                 return true;
              }
        }
        return false;
 }

 //Appel 
   $tab=init_tab();
   $val=2;
  $result= search_tab($tab,$val);

   /**
    * fonctions qui compte  la presence d'une valeur dans un tableau
    */

  function count_val(array $tab,int $val):int{
      $cpt=0;
      foreach ($tab as $value) {
            if(search_tab($tab,$val)) $cpt++;
        }
        return $cpt;
  }

  //Appel 
  $nbre=count_val($tab,$val);
 /**
    * fonction qui  recoit un tableau et ordre("asc","dec") puis 
    * trie le tableau suivant la valeur de l'ordre.
    * Par defaut la fonction trie sur l'ordre croissant
 */

 function sort_tab(array $tab,string $ordre="asc"):array{
      //A faire
      //Trie par Insertion ou Selection
      return [];
 }

 //Appel
 /**
  * Une fonction qui initialise un tableau de produits.
  * Un produit est caractérisé par sa ref, son prix et
   * sa quantité en stock;
  */



//Appels
  $s=somme(2,3);
  $x=12;
  $s=somme(2,3,$x);//17
  $s=somme(2,3,$x,15);//32


?>