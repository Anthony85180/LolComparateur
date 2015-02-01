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
$ratio = ($win/$loose);

$smarty->assign('playerName',$pseudo);
$smarty->assign('playerDivision', $tier.$div);
$smarty->assign('playerWin', $win);
$smarty->assign('playerLoose', $loose);
$smarty->assign('playerRatio', $ratio);


?>






