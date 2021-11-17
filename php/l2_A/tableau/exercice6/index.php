<?php 
  $entiers=[11,2,6,7];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exercice 6</title>
</head>
<body>
      <div class="container">
          <table>
              <?php foreach($entiers as $entier): ?>
                   <tr>
                        <?php for($i=1;$i<=$entier;$i++): ?>
                            <td> <?=$i ?></td>
                        <?php endfor ?>
                   </tr>
              <?php endforeach ?>
          </table>
      </div>
</body>
</html>