<?php 
/**
 * Script qui initialise un tableau d'entiers et 
 * genere une table HTML dont le nbre de ligne est egal 
 * au nbre d'elements du Tableau.
 * Le nbre de colonne de chaque ligne correspond respectivement
 * à la valeur se trouvant dans le tableau entier
 */
$niveaux=["L1","L2","L3","Master 1","Master 2"];
$classes=[
     ["niveau"=>"L1","filiere"=>"Mae"],
     ["niveau"=>"L2","filiere"=>"GLRS"],
     ["niveau"=>"L1","filiere"=>"TTL"],
     ["niveau"=>"L3","filiere"=>"Mae"],
     ["niveau"=>"L2","filiere"=>"MOSIEF"],
     ["niveau"=>"L3","filiere"=>"MOSIEF"],
     ["niveau"=>"Master 1","filiere"=>"Actuariat"]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=di, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exercice 3</title>
</head>
<body>
    <div class="container">
        <table>
            <thead>
                <?php foreach($niveaux as $niveau): ?>
                      <th> <?=$niveau ?></th>
                <?php endforeach  ?>
            </thead>

            <tbody>
                  <tr>
                    <?php foreach($niveaux as $niveau): ?>
                        <td> 
                            <ul>
                                <?php foreach($classes as $classe): ?>
                                    <?php if($classe['niveau']==$niveau): ?>
                                         <li><?=$classe['filiere'] ?></li>
                                    <?php endif ?>
                                <?php endforeach  ?>
                            </ul>
                        </td>
                    <?php endforeach  ?>
                  </tr> 
            </tbody>
        </table>
    </div>
</body>
</html>

