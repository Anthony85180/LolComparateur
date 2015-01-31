<?php

     function getIdPlayer()
    {	
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
			return $id;
		}

		curl_close($c);
		
    }

   //~ global $medDepot;
		//~ global $nomCommerce;
		//~ global $famCode;
		//~ global $medCompo;
		//~ global $medEffet;
		//~ global $medContreInd ;
		//~ global $medPrixEchan;
		//~ 
		//~ $listecolumntable = $table->getElementsByTagName('column');
		//~ foreach($listecolumntable as $column){
			//~ $text =$column->firstChild->nodeValue;
			//~ $attrib =$column->getAttribute("name");
			//~ $tab[$attrib] = $text; 
		//~ }
		//~ $medDepot = $tab['MED_DEPOTLEGAL'];
		//~ $nomCommerce = $tab['MED_NOMCOMMERCIAL'];
		//~ $famCode = $tab['FAM_CODE'];
		//~ $medCompo = $tab['MED_COMPOSITION'];
		//~ $medEffet = $tab['MED_EFFETS'];
		//~ $medContreInd = $tab['MED_CONTREINDIC'];
		//~ $medPrixEchan = $tab['MED_PRIXECHANTILLON'];

?>
