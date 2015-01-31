<?php

/*Initialisation de la ressource curl*/

$location =strtolower ($_POST['serveur']) ;
$pseudo = strtolower ($_POST['pseudo']);

$c = curl_init();
curl_setopt($c, CURLOPT_URL, "$location.api.pvp.net/api/lol/$location/v1.4/summoner/by-name/$pseudo?api_key=$riotkey");
curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
curl_setopt($c, CURLOPT_HEADER, false);
$output = curl_exec($c);
if($output === false)
{
	trigger_error('Erreur curl : '.curl_error($c),E_USER_WARNING);
}

else
{
	$result = json_decode($output, true);
	//~ var_dump($result);
	$id =$result[$pseudo]["id"];
}

curl_close($c);


$c = curl_init();
curl_setopt($c, CURLOPT_URL, "euw.api.pvp.net/api/lol/euw/v2.5/league/by-summoner/$id?api_key=$riotkey");
curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
curl_setopt($c, CURLOPT_HEADER, false);
$output2 = curl_exec($c);

if($output2 === false)
{
	trigger_error('Erreur curl : '.curl_error($c),E_USER_WARNING);
}

else
{	
	//~ var_dump($output2);
	$result2 = json_decode($output2, true);
}


foreach ($result2[$id][0]["entries"] as $entry )
{
	if ($entry['playerOrTeamId'] == $id){

		$joueur = $entry;
		//~ var_dump($joueur);


	}
}

$tier = $result2[$id][0]["tier"];
$div = $joueur["division"];
$loose =$joueur["losses"];
$win = $joueur["wins"];



coucou();
echo ("Je suis ".$pseudo." le ".$tier." ".$div." qui a gagnié ".$win." ranked pour SEULEMENT ".$loose." looses");

?>






