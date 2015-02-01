<?php

     function getPlayerId($pseudo,$location){	
		
			global $riotkey;
			
			
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
				$playerId =$result[$pseudo]["id"];
				return $playerId;
			}

			curl_close($c);
		
		}
    
    
       function getPlayerLeagueInfo($id) {	
		
			global $riotkey;
			
			$c = curl_init();
			curl_setopt($c, CURLOPT_URL, "euw.api.pvp.net/api/lol/euw/v2.5/league/by-summoner/$id?api_key=$riotkey");
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
				$playerLeagueInfo = $result[$id][0];
			}
		
			
			
			return $playerLeagueInfo;
	}
	
    
      function 	getPlayerRankedInfo($id){	
			
			global $riotkey;
			
			$playerLeagueInfo = getPlayerLeagueInfo($id);
			

			foreach ($playerLeagueInfo["entries"] as $entry )
			{
				if ($entry['playerOrTeamId'] == $id){

					$playerRankedInfo = $entry;
				}
			}
			
			return $playerRankedInfo;
	}
   

   
       function getPlayerStat($id) {	
		
			global $riotkey;
			
			$c = curl_init();
			curl_setopt($c, CURLOPT_URL, "euw.api.pvp.net/api/lol/euw/v1.3/stats/by-summoner/$id/summary?season=SEASON2015&api_key=$riotkey");
			curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($c, CURLOPT_HEADER, false);
			$output = curl_exec($c);

			if($output === false)
			{
				trigger_error('Erreur curl : '.curl_error($c),E_USER_WARNING);
			}

			else
			{	
				//~ var_dump($output);
				$result = json_decode($output, true);
				$playerStat = $result['playerStatSummaries'];
			}
			var_dump($playerStat);
			exit;
			return $playerStat;
	}

?>
