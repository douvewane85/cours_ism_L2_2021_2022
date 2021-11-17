<?php 

  require_once("../bd/data.php");

function lister_classe(string $filiere=null,string $niveau=null):array{
    if($filiere!=null && !is_null($niveau)) return filter_classe($filiere,$niveau);
    return init_classe();
}


function filter_classe(string $filiere,string $niveau):array{
    $all_classes=init_classe();
    $filter_classes=[];
    foreach ($all_classes as  $classe) {
        if($classe['filiere']===$filiere && $classe['niveau']===$niveau){
            $filter_classes[] =$classe;
        }
    }

    return $filter_classes;
}

function lister_etudiant_une(string $filiere,string $niveau):array{
    $all_classes=init_classe();
    foreach ($all_classes as  $classe) {
        if($classe['filiere']===$filiere && $classe['niveau']===$niveau){
            return $classe['etudiants'] ;
        }
    } 

    return [];

}