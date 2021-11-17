<?php 
  $couleurs=["red","yellow","green","black","pink"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exercice 5</title>
</head>
<body>
      <div class="container">
          <table>
              <tr>
                  <?php foreach($couleurs as $couleur):  ?>
                      <td style="background-color:<?php echo $couleur;?>"></td>
                   <?php endforeach  ?>
              </tr>
          </table>
      </div>

</body>
</html>