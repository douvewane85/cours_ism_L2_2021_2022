<?php 
  require_once("data.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=div, initial-scale=1.0">
    <title>Classes</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <div class="container">
        <div class="filtre">
              <form action="controlleurs.php" method="post">
                  <div class="form-group">
                      <label for="">Niveau</label>
                      <select name="" id="">
                        <option value=""></option>
                        <?php foreach($niveaux as $niveau): ?>
                            <option value="<?=$niveau?>"><?=$niveau?></option>
                        <?php endforeach ?> 
                      </select>
                  </div>
                  <div class="form-group">
                      <label for="">Filiere</label>
                      <select name="" id="">
                          <option value=""></option>
                          <?php foreach($filieres as $filiere): ?>
                            <option value="<?=$filiere?>"><?=$filiere?></option>
                        <?php endforeach ?> 
                      </select>
                  </div>
                  <div class="form-group">
                         <button type="submit">OK</button>
                  </div>

              </form>

        </div>

        <div class="table">
              <table>
                  <thead>
                      <th>Niveau</th>
                      <th>Filiere</th>
                      <th>Action</th>
                  </thead>
                  <tbody>
                  <?php foreach($classes as $classe): ?>
                      <tr>
                          <td><?=$classe['niveau']?></td>
                          <td><?=$classe['filiere']?></td>
                          <td><a href="#">etudiants</a></td>
                      </tr>
                 <?php endforeach ?>  
                  </tbody>
              </table>
        </div>
    </div>
    
</body>
</html>