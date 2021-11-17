<?php
function init_niveau() :array {
    $niveaux=["L1","L2","L3","M1","M2"];
    return $niveaux;
}

function init_filiere() :array {
    $filieres=["MAE","GRLS","IAGE","CDSD"];
    return $filieres;
}

function init_classe() :array {

$classes=[
     [
         "niveau"=>init_niveau()[0],
         "filiere"=>init_filiere()[0],
         "etudiants"=>[
             [
                "matricule"=>"MAT001",
                "nom"=>"Diop",
                "prenom"=>"Amadou",
                "sexe"=>"M"
             ],
             [
                "matricule"=>"MAT002",
                "nom"=>"Faye",
                "prenom"=>"Astou",
                "sexe"=>"F"
             ],
             [
                "matricule"=>"MAT003",
                "nom"=>"Kane",
                "prenom"=>"Adama",
                "sexe"=>"F"
             ]
         ]
     ] ,
     [
        "niveau"=>init_niveau()[1],
        "filiere"=>init_filiere()[3],
        "etudiants"=>[
            [
               "matricule"=>"MAT004",
               "nom"=>"Ndiaye",
               "prenom"=>"Amadou",
               "sexe"=>"M"
            ],
            [
               "matricule"=>"MAT005",
               "nom"=>"Faye",
               "prenom"=>"Aissatou",
               "sexe"=>"F"
            ],
            [
               "matricule"=>"MAT006",
               "nom"=>"Kane",
               "prenom"=>"Adama",
               "sexe"=>"M"
            ],
            [
                "matricule"=>"MAT007",
                "nom"=>"Faye",
                "prenom"=>"Ngor",
                "sexe"=>"M"
             ]
        ]
    ]
     

];
   return $classes;
}