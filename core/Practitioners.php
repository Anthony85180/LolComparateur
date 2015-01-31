<?php

class Practitioners
{
    //Récupérer toutes les offres
    static public function getAll()
    {
      //On définit la bdd pour la fonction
      global $pdo;
      $Practitioners=$pdo->query("SELECT *  FROM praticien JOIN type_praticien ON praticien.TYP_CODE = type_praticien.TYP_CODE ORDER BY PRA_NOM ;");
	  $Practitioners=$Practitioners->fetchAll(PDO::FETCH_ASSOC);
      
      //~ $offers = $bdd->query('SELECT * FROM offers')->fetchAll(PDO::FETCH_ASSOC);
      return ($Practitioners);
    }

    //Récupérer plus d'info sur 1 offre
    public function getOne($id_Pract)
    {
      global $pdo;
      $Practitioner = $bdd->query('SELECT * FROM offers WHERE offers.id = '.$id_Pract.' ')->fetch(PDO::FETCH_ASSOC);
      return ($Practitioner);
    }

    //Ajouter une offre
    public function Add($data)
    {
      global $pdo;
      $insert = $bdd->exec('INSERT INTO praticien(PRA_NOM,PRA_PRENOM,PRA_ADRESSE,PRA_CP,PRA_VILLE,PRA_COEFNOTORIETE,TYP_CODE) VALUES('.$data['PRA_NOM'].', '.$data['PRA_PRENOM'].', '.$data['PRA_ADRESSE'].', '.$data['PRA_CP'].', '.$data['PRA_VILLE'].', '.$data['PRA_COEFNOTORIETE'].', '.$data['TYP_CODE'].')');
      return ($insert);
    }
    
    
    
    
    
}

?>
