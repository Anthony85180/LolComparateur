<?php

class Drugs
{
    //Récupérer toutes les offres
    static public function getAll()
    {
      //On définit la bdd pour la fonction
      global $pdo;
      $drugs=$pdo->query("SELECT *  FROM medicament JOIN famille ON medicament.FAM_CODE = famille.FAM_CODE WHERE medicament.MED_STATUT = 'M' OR medicament.MED_STATUT = 'A' ORDER BY MED_NOMCOMMERCIAL ;");
	  $drugs=$drugs->fetchAll(PDO::FETCH_ASSOC);
      
      //~ $offers = $bdd->query('SELECT * FROM offers')->fetchAll(PDO::FETCH_ASSOC);
      return ($drugs);
    }

     static public function countAll()
    {
      global $pdo;
      $count = $pdo->query("SELECT COUNT(*) AS nb FROM medicament WHERE medicament.MED_STATUT = 'M' OR medicament.MED_STATUT = 'A' ");
	  $Rcount= $count->fetch();
      return ($Rcount);
    }
   
   
   
    //Récupérer plus d'info sur 1 offre
    public function getOne($id_drug)
    {
      global $pdo;
      $offer = $bdd->query('SELECT * FROM offers WHERE offers.id = '.$id_drug.' ')->fetch(PDO::FETCH_ASSOC);
      return ($drug);
    }

    //Ajouter une offre
    public function Add($data)
    {
      global $pdo;
      $insert = $bdd->exec('INSERT INTO TABLE(ATTRIBUT1,ATTRIBUT2) VALUES('.$data['ATTRIBUT1'].', '.$data['ATTRIBUT2'].')');
      return ($insert);
    }
    
    
    
    
    
}

?>
