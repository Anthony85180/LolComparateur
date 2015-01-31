
<?php

// initialisation de la session
session_start();
header("Cache-Control: no-cache");

// chargement Smarty et Defines
require('defines.inc.php');
require(_PATH_ . '/web/tools/smarty/Smarty.class.php');

// chargement du coeur
$files = scandir(_CORE_);
foreach ($files as $filename)
{
    if (is_file(_CORE_.$filename))
        require_once(_CORE_.$filename);
}

// connexion Database
	
//~ $db = 'mysql:host=localhost;dbname=swiss' ;
//~ $user = 'root' ; 
//~ $pass = null;
	//~ 
//~ try{ // gestion des erreurs 
    //~ $pdo = new PDO($db,$user,$pass); 
//~ } catch(Exception $e) {
    //~ echo "co à la base de donnée impossible: ".$e->getMessage();
    //~ die(); // on arrete tout 
//~ }
//~ $pdo->query("SET NAMES UTF8"); 

$riotkey = "05f0c777-94f4-403d-b9a6-0dc4f93e67da";

// Initialisation de marty
$smarty = new Smarty();

?>
