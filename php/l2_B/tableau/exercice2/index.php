<?php 
/**
 * Script qui initialise un tableau de couleur puis 
 * genere une table HTML dont le nombre de ligne est est egal 
 * de couleurs.
 * Une ligne  contient 2 colonnes et a la meme couleur que celle definie dans
 * le tableau
 */

 $couleurs=["red","yellow","blue","green","pink","black"];

 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="style.css">
     <title>Exercice 2</title>
 </head>
 <body>
     <div class="container">
         <table>
             <?php foreach($couleurs as $couleur) :?>
                     <tr>
                         <td> <?php echo ucfirst($couleur);?> </td>
                         <td style="background-color: <?=$couleur;?>"></td>
                     </tr>      
            <?php endforeach?>
         </table>
     </div>
     
 </body>
 </html>


