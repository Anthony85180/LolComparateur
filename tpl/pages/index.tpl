{include file='tpl/pages/header.tpl'}

<form action="index.php?page=home" method="post">

<p>
	<div class="search-box">
		
		<input type="text"placeholder="Joueur 1" name="pseudo1" class="search" required/>
		
		<select name="serveur1">;
		<option value ="euw">EU</option>
		
		
		<input type="text" placeholder="Joueur 2"name="pseudo2" class="search" required/>
		
		<select name="serveur2">;
		<option value ="euw">EU</option>
			
		<input type="submit" value="Valider" class ="submit" />
		</div>
	
	</p>

</form>
