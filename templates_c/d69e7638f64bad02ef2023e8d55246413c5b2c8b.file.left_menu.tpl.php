<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-01-18 22:49:46
         compiled from "tpl\pages\left_menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:426554baeac3329719-62050863%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd69e7638f64bad02ef2023e8d55246413c5b2c8b' => 
    array (
      0 => 'tpl\\pages\\left_menu.tpl',
      1 => 1421617769,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '426554baeac3329719-62050863',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54baeac3376a77_21779930',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54baeac3376a77_21779930')) {function content_54baeac3376a77_21779930($_smarty_tpl) {?><div id="menuGauche">

<br>
<div class="panel panel-default">
	<div class="panel-heading">Consultation :</div>
		<div class="panel-body">
			<form class="ressource" id="area_001" action="/GRR/week.php">
			<input class="btn btn-primary btn-lg btn-block item_select" name="1" value="Planning" onclick="location.href='index.php?page=planning' ;charger();">
			<input class="btn btn-primary btn-lg btn-block item_select" name="1" value="Visites" onclick="location.href='index.php?page=visites' ;charger();">
			<input class="btn btn-primary btn-lg btn-block item_select" name="1" value="Praticiens" onclick="location.href='index.php?page=practitioners' ;charger();">
			<input class="btn btn-primary btn-lg btn-block item_select" name="1" value="Médicaments" onclick="location.href='index.php?page=drugs' ;charger();">
			<input class="btn btn-primary btn-lg btn-block item_select" name="1" value="Statistiques" onclick="location.href='index.php?page=statistic' ;charger();">
			</form>
		</div>
	</div>
<br>
	<div class="panel panel-default">
		<div class="panel-heading">Saisie : </div>
			<div class="panel-body">
				<form class="ressource" id="room_001" action="/GRR/week.php">
				<input class="btn btn-primary btn-lg btn-block item_select" name="1" value="Compte-rendu" onclick="location.href='index.php?page=debriefing';charger();">
				<input class="btn btn-primary btn-lg btn-block item_select" name="1" value="fiche de frais" onclick="location.href='index.php?page=chargeSheet';charger();">
				</form>
			</div>
	</div>
	
	<div class="panel panel-default">
		<div class="panel-heading">Mon compte : </div>
			<div class="panel-body">
				<form class="ressource" id="room_001" action="/GRR/week.php">
				<input class="btn btn-primary btn-lg btn-block item_select" name="1" value="Informations" onclick="location.href='index.php?page=debriefing';charger();">
				</form>
			</div>
	</div>
</div>

<?php }} ?>
