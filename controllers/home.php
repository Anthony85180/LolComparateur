<?php

//~ Informations joueur I

//~ $location1 =strtolower ($_POST['serveur1']) ;     
//~ $pseudo1 = strtolower ($_POST['pseudo1']);
//~ $pseudo1=str_replace(' ','',$pseudo1);
//~ $idPlayer1 = getPlayerId($pseudo1,$location1);
//~ $rankedInfoPlayer1 = getPlayerRankedInfo($idPlayer1);
//~ $leagueInfoPlayer1 = getPlayerLeagueInfo($idPlayer1);
//~ $PlayerStat1 = getPlayerStat($idPlayer1);

$pseudo1 = "Soléano";

$rankedInfoPlayer1 = getPlayerRankedInfo("34620641");
$leagueInfoPlayer1 = getPlayerLeagueInfo("34620641");
$PlayerStat1 = getPlayerStat("34620641");



$normalWin1 = $PlayerStat1['wins'];
$tier1 = $leagueInfoPlayer1["tier"];
$div1 = $rankedInfoPlayer1["division"];
$loose1 = $rankedInfoPlayer1["losses"];
$win1=$rankedInfoPlayer1["wins"];
$ratio1 = ($win1/$loose1);

$smarty->assign('player1Name',$pseudo1);
$smarty->assign('player1Division', $tier1.$div1);
$smarty->assign('player1Win', $win1);
$smarty->assign('player1Loose', $loose1);
$smarty->assign('player1Ratio', $ratio1);
$smarty->assign('player1NormWin', $normalWin1);


//~ Informations joueur II

$location2 =strtolower ($_POST['serveur']) ;
$pseudo2 = strtolower ($_POST['pseudo']);
$pseudo2=str_replace(' ','',$pseudo2);

$idPlayer2 = getPlayerId($pseudo2,$location2);
$rankedInfoPlayer2 = getPlayerRankedInfo($idPlayer2);
$leagueInfoPlayer2 = getPlayerLeagueInfo($idPlayer2);
$PlayerStat2 = getPlayerStat($idPlayer2);


$normalWin2 = $PlayerStat2['wins'];
$tier2 = $leagueInfoPlayer2["tier"];
$div2 = $rankedInfoPlayer2["division"];
$loose2 = $rankedInfoPlayer2["losses"];
$win2=$rankedInfoPlayer2["wins"];
$ratio2 = ($win2/$loose2);

$smarty->assign('player2Name',$pseudo2);
$smarty->assign('player2Division', $tier2.$div2);
$smarty->assign('player2Win', $win2);
$smarty->assign('player2Loose', $loose2);
$smarty->assign('player2Ratio', $ratio2);
$smarty->assign('player2NormWin', $normalWin2);

?>






