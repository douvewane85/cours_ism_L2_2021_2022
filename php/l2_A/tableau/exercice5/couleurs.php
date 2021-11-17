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
    <title>Exercice 5 bis</title>
</head>
<body>
        <div class="container">
            <table>
                <?php foreach($couleurs as $couleur): ?>
                    <tr>
                        <td> <?php echo ucfirst($couleur);?></td>
                        <td style="background-color:<?=$couleur?>"></td>
                    </tr>
                <?php endforeach ?>
            </table>
        </div> 
</body>
</html>