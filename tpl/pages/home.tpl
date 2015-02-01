{include file='tpl/pages/header.tpl'}


<div id = "principal">
 <div class="row">
        <div class="center-block"></div>
    </div>
    <div class="row">
        <div class="col-md-6 brd player1">
            <div class="center-block">
            
					<b>{$playerName}</b>
            
            
					<div class="responsive-table-line" style="margin:0px auto;max-width:700px;">
					<table class="table table-bordered table-condensed table-body-center" >
				
				<thead>
				
				<td colspan="2">Parties classées</td>
				
				</thead>
				<tbody>
				<tr>
					<td data-title="Droit">Division</td>
					<td data-title="Valeur alphanumérique">{$playerDivision}</td>
				</tr>
				<tr>
					<td data-title="Droit">Victoires</td>
					<td data-title="Valeur alphanumérique">{$playerWin}</td>
				</tr>
				<tr>
					<td data-title="Droit">Défaites</td>
					<td data-title="Valeur alphanumérique">{$playerLoose}</td>
				</tr>
				
				<tr>
					<td data-title="Droit"><B>Ratio</b></td>
					<td data-title="Valeur alphanumérique">{$playerRatio}</td>
				</tr>
			
				</tbody>
				</table>
				
				</div>
            </div>
        </div>
        <div class="col-md-6 brd player2">
            <div class="center-block">2 center-block</div>
        </div>
    </div>
</div>
