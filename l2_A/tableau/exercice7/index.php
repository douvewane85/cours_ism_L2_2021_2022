<?php 
        $classes=[
            [
                "niveau"=>"L1",
                "filiere"=>"MAE"
            ],
            [
                "niveau"=>"L2",
                "filiere"=>"MAE"
            ],
            [
                "niveau"=>"L1",
                "filiere"=>"CDSD",
                "etudiants"=>[
                    [
                        "matricule"=>uniqid(),
                        "nom"=>"Diop",
                        "prenom"=>"Amadou"
                    ],[
                        "matricule"=>uniqid(),
                        "nom"=>"Ndiaye",
                        "prenom"=>"Astou"
                    ]
                ]
            ],


        ];

        $etudiants=[
            [
                "matricule"=>uniqid(),
                "nom"=>"Diop",
                "prenom"=>"Amadou"
            ],
            [
                "matricule"=>uniqid(),
                "nom"=>"Ndiaye",
                "prenom"=>"Astou"
            ],
            [
                "matricule"=>uniqid(),
                "nom"=>"Faye",
                "prenom"=>"Aissatou"
            ]
        ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Liste des Classes</title>
</head>
<body>
      <div class="container">
          <h3>Liste des Classes</h3>
          <table>
            <thead>
                   <th>Niveau</th>
                   <th>Filiere</th>
            </thead>
            <tbody>
                <?php foreach($classes as $classe): ?>
                    <tr>
                        <td><?=$classe['niveau'];?></td>
                        <td><?=$classe['filiere'];?></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
          </table>
      </div>
</body>
</html>