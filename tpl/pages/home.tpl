{include file='tpl/pages/header.tpl'}


<div id = "principal">
 <div class="row">
        <div class="center-block"></div>
    </div>
    <div class="row">
        <div class="col-md-6 brd player1">
            <div class="center-block">
            
					<b>{$player1Name|default:'Joueur inéxistant'}</b>
            
            
					<div class="responsive-table-line" style="margin:0px auto;max-width:700px;">
						<table class="table table-bordered table-condensed table-body-center" >
					
						<thead>
						
						<td colspan="2">Parties classées</td>
						
						</thead>
						<tbody>
						<tr>
							<td data-title="Droit">Division</td>
							<td data-title="Valeur alphanumérique">{$player1Division|default:"Pas d'informations"}</td>
						</tr>
						<tr>
							<td data-title="Droit">Victoires</td>
							<td data-title="Valeur alphanumérique">{$player1Win|default:"Pas d'informations"}</td>
						</tr>
						<tr>
							<td data-title="Droit">Défaites</td>
							<td data-title="Valeur alphanumérique">{$player1Loose|default:"Pas d'informations"}</td>
						</tr>
						
						<tr>
							<td data-title="Droit"><B>Ratio</b></td>
							<td data-title="Valeur alphanumérique">{$player1Ratio|default:"Pas d'informations"}</td>
						</tr>
					
						<td colspan="2">Parties normales</td>
						<tr>
							<td data-title="Droit">Victoires</td>
							<td data-title="Valeur alphanumérique">{$player1NormWin|default:"Pas d'informations"}</td>
						</tr>
					
						</tbody>
						</table>
				
					</div>
            </div>
        </div>
        
        <div class="col-md-6 brd player2">
            <div class="center-block">
            
            <b>{$player2Name|default:'Joueur inéxistant'}</b>
            
            
					<div class="responsive-table-line" style="margin:0px auto;max-width:700px;">
						<table class="table table-bordered table-condensed table-body-center" >
					
						<thead>
						
						<td colspan="2">Parties classées</td>
						
						</thead>
						<tbody>
						<tr>
							<td data-title="Droit">Division</td>
							<td data-title="Valeur alphanumérique">{$player2Division|default:"Pas d'informations"}</td>
						</tr>
						<tr>
							<td data-title="Droit">Victoires</td>
							<td data-title="Valeur alphanumérique">{$player2Win|default:"Pas d'informations"}</td>
						</tr>
						<tr>
							<td data-title="Droit">Défaites</td>
							<td data-title="Valeur alphanumérique">{$player2Loose|default:"Pas d'informations"}</td>
						</tr>
						
						<tr>
							<td data-title="Droit"><B>Ratio</b></td>
							<td data-title="Valeur alphanumérique">{$player2Ratio|default:"Pas d'informations"}</td>
						</tr>
					
					
						<td colspan="2">Parties normales</td>
						<tr>
							<td data-title="Droit">Victoires</td>
							<td data-title="Valeur alphanumérique">{$player2NormWin|default:"Pas d'informations"}</td>
						</tr>
					
						</tbody>
						</table>
				
					</div>
            
            
            
            </div>
        </div>
    </div>
</div>
