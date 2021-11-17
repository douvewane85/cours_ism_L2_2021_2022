
<?php 

/**
 * Definition des Fonctions
 */

 /**
  * Initialisation d'un Tableau d'entiers
  */
  function initialize_tableau():array{
      return [1,15,-5,12,20];
  }

  /**
  * Affiche le Tableau
  */
  function show_tableau(array $tab):void{
    foreach ($tab as $value) {
        echo ("$value ");
    }
  }
  /**
   * Recherche
   */
  function search_val(array $tab,int $val):bool{
    foreach ($tab as $value) {
       if($value==$val){
           return true;
       }
    } 
    return false;
  }

  /**
   * Transferer pairs dans T1 et impairs dans T2
   */

   function transfert_tableau_v1(array $tab):void{
        $t1=[];
        $t2=[];
        foreach ($tab as $value) {
            if($value%2==0){
                $t1[]=$value;
            }else{
                $t2[]=$value;
            }
        }

        show_tableau($t1);
        echo "<br>";
        show_tableau($t2);
   }

   function transfert_tableau_v2(array $tab):array{
    $t1=[];
    $t2=[];
    foreach ($tab as $value) {
        if($value%2==0){
            $t1[]=$value;
        }else{
            $t2[]=$value;
        }
    }

   return [
       $t1,$t2
   ];
}