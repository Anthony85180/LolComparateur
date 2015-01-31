<?php



$location =strtolower ($_POST['serveur']) ;
$pseudo = strtolower ($_POST['pseudo']);


$id = getPlayerId();
$rankedInfoPlayer = getPlayerRankedInfo($id);
$leagueInfoPlayer = getPlayerLeagueInfo($id);

$tier = $leagueInfoPlayer["tier"];
$div = $rankedInfoPlayer["division"];
$loose = $rankedInfoPlayer["losses"];
$win =$rankedInfoPlayer["wins"];



echo ("Je suis ".$pseudo." le ".$tier." ".$div." qui a gagnié ".$win." ranked pour SEULEMENT ".$loose." looses");

?>






