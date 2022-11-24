<?php
    function find_auteurs(array $auteurs):array{
        $aut=[];
        foreach ($auteurs as $key => $value) {
            $nom=find_nom_by_code($value["nom_code"]);
            $prenom=find_prenom_by_code($value["classe_code"]);
            $aut[]=[
                            "nom"=>$auteurs["nom"],
                            "prenom"=>$auteurs["prenom"],
                            "nombre d'ouvrage"=>$ouvrage["nombre d'ouvrage"],
                            "profession"=>$auteurs["profession"]
            ];
        }
        return $aut;
    }

    function find_rayon_by_code(int $code ):array | null{
        foreach ($rayon as $key => $value) {
           if($value["code"]==$id){
                return $value;
           }
        }
        return null;
    }
    function find_ouvrage_by_code(int $code ):array | null{
        foreach ($ouvrage as $key => $value) {
           if($value["code"]==$id){
                return $value;
           }
        }
        return null;
    }

    
?>