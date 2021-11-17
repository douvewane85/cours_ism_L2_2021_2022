<?php 
/**
 * Somme de 2 nombres, 3 nombres,4 nombres
 */
//Definition 
 function  somme(int $val1,int $val2,int $val3=0,int $val4=0):int{
       return $val1+$val2+$val3+$val4; 
 }

 //Appels
   $result1=somme(3,5);
   $x=23;
   $result2=somme(3,5,$x);
   $result3=somme(3,5,$x,15);

   //Traitements
   echo "La somme est $result1 <br>";
   echo "La somme est $result2 <br>";
   echo "La somme est $result3 <br>";