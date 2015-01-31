<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-01-18 13:36:29
         compiled from "tpl\pages\left_menu_calendar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2038754bba83a8d4da6-63147318%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dcec939b7605201f8b61653dfd31ba390ca56a05' => 
    array (
      0 => 'tpl\\pages\\left_menu_calendar.tpl',
      1 => 1421584587,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2038754bba83a8d4da6-63147318',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54bba83a8dfac6_84999050',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54bba83a8dfac6_84999050')) {function content_54bba83a8dfac6_84999050($_smarty_tpl) {?><div id="menuGauche">
<table class="calendar">
<caption>
<div class="btn-group">
<button type="button" title="Année précédente" class="btn btn-default btn-xs" onclick="charger();javascript: location.href='month.php?year=2014&amp;month=01&amp;day=1&amp;area=1&amp;room=1';"><span class="glyphicon glyphicon-backward"></span></button>
<button type="button" title="Voir les réservations du mois pour cette ressource" class="btn btn-default btn-xs" onclick="charger();javascript: location.href='month.php?year=2014&amp;month=12&amp;day=1&amp;area=1&amp;room=1';"><span class="glyphicon glyphicon-chevron-left"></span></button>
<button title="Voir les réservations du mois pour toutes les ressources" class="btn btn-default btn-xs" onclick="charger();javascript: location.href='month.php?year=2015&amp;month=01&amp;day=1&amp;area=1&amp;room=1';">Janvier 2015</button>
<button type="button" title="Voir les réservations du mois pour cette ressource" class="btn btn-default btn-xs" onclick="charger();javascript: location.href='month.php?year=2015&amp;month=02&amp;day=1&amp;area=1&amp;room=1';"><span class="glyphicon glyphicon-chevron-right"></span></button>
<button type="button" title="Année suivante" class="btn btn-default btn-xs" onclick="charger();javascript: location.href='month.php?year=2016&amp;month=01&amp;day=1&amp;area=1&amp;room=1';"><span class="glyphicon glyphicon-forward"></span></button>
</div>
<br><button title="Aujourd'hui" class="btn btn-default btn-xs" onclick="charger();javascript: location.href='day.php?year=2015&amp;month=01&amp;day=17&amp;room=1';">Aujourd'hui</button>
</caption>
<tbody><tr>
<td class="calendarcol1">Sem</td>
<td class="calendarcol1">Lun.</td>
<td class="calendarcol1">Mar.</td>
<td class="calendarcol1">Mer.</td>
<td class="calendarcol1">Jeu.</td>
<td class="calendarcol1">Ven.</td>
<td class="calendarcol1">Sam.</td>
<td class="calendarcol1">Dim.</td>
</tr>
<tr><td class="calendarcol1 lienSemaine"><a onclick="charger();" title="Voir les réservations de la semaine pour cette ressource" href="week.php?year=2015&amp;month=01&amp;day=1&amp;area=1&amp;room=1">01</a></td>
<td class="cellcalendar"> </td>
<td class="cellcalendar"> </td>
<td class="cellcalendar"> </td>
<td class="cellcalendar"><a onclick="charger();" class="calendar" title="Voir toutes les ressources du domaine pour cette journée" href="day.php?year=2015&amp;month=01&amp;day=1&amp;room=1">1</a></td>
<td class="cellcalendar"><a onclick="charger();" class="calendar" title="Voir toutes les ressources du domaine pour cette journée" href="day.php?year=2015&amp;month=01&amp;day=2&amp;room=1">2</a></td>
<td class="cellcalendar"><a onclick="charger();" class="calendar" title="Voir toutes les ressources du domaine pour cette journée" href="day.php?year=2015&amp;month=01&amp;day=3&amp;room=1">3</a></td>
<td class="cellcalendar"><a onclick="charger();" class="calendar" title="Voir toutes les ressources du domaine pour cette journée" href="day.php?year=2015&amp;month=01&amp;day=4&amp;room=1">4</a></td>
</tr>
<tr><td class="calendarcol1 lienSemaine"><a onclick="charger();" title="Voir les réservations de la semaine pour cette ressource" href="week.php?year=2015&amp;month=01&amp;day=8&amp;area=1&amp;room=1">02</a></td>
<td class="cellcalendar"><a onclick="charger();" class="calendar" title="Voir toutes les ressources du domaine pour cette journée" href="day.php?year=2015&amp;month=01&amp;day=5&amp;room=1">5</a></td>
<td class="cellcalendar"><a onclick="charger();" class="calendar" title="Voir toutes les ressources du domaine pour cette journée" href="day.php?year=2015&amp;month=01&amp;day=6&amp;room=1">6</a></td>
<td class="cellcalendar"><a onclick="charger();" class="calendar" title="Voir toutes les ressources du domaine pour cette journée" href="day.php?year=2015&amp;month=01&amp;day=7&amp;room=1">7</a></td>
<td class="cellcalendar"><a onclick="charger();" class="calendar" title="Voir toutes les ressources du domaine pour cette journée" href="day.php?year=2015&amp;month=01&amp;day=8&amp;room=1">8</a></td>
<td class="cellcalendar"><a onclick="charger();" class="calendar" title="Voir toutes les ressources du domaine pour cette journée" href="day.php?year=2015&amp;month=01&amp;day=9&amp;room=1">9</a></td>
<td class="cellcalendar"><a onclick="charger();" class="calendar" title="Voir toutes les ressources du domaine pour cette journée" href="day.php?year=2015&amp;month=01&amp;day=10&amp;room=1">10</a></td>
<td class="cellcalendar"><a onclick="charger();" class="calendar" title="Voir toutes les ressources du domaine pour cette journée" href="day.php?year=2015&amp;month=01&amp;day=11&amp;room=1">11</a></td>
</tr>
<tr class="week"><td class="calendarcol1 lienSemaine"><a onclick="charger();" title="Voir les réservations de la semaine pour cette ressource" href="week.php?year=2015&amp;month=01&amp;day=15&amp;area=1&amp;room=1">03</a></td>
<td class="cellcalendar"><a onclick="charger();" class="calendar" title="Voir toutes les ressources du domaine pour cette journée" href="day.php?year=2015&amp;month=01&amp;day=12&amp;room=1">12</a></td>
<td class="cellcalendar"><a onclick="charger();" class="calendar" title="Voir toutes les ressources du domaine pour cette journée" href="day.php?year=2015&amp;month=01&amp;day=13&amp;room=1">13</a></td>
<td class="cellcalendar"><a onclick="charger();" class="calendar" title="Voir toutes les ressources du domaine pour cette journée" href="day.php?year=2015&amp;month=01&amp;day=14&amp;room=1">14</a></td>
<td class="cellcalendar"><a onclick="charger();" class="calendar" title="Voir toutes les ressources du domaine pour cette journée" href="day.php?year=2015&amp;month=01&amp;day=15&amp;room=1">15</a></td>
<td class="cellcalendar"><a onclick="charger();" class="calendar" title="Voir toutes les ressources du domaine pour cette journée" href="day.php?year=2015&amp;month=01&amp;day=16&amp;room=1">16</a></td>
<td class="cellcalendar"><a onclick="charger();" class="calendar" title="Voir toutes les ressources du domaine pour cette journée" href="day.php?year=2015&amp;month=01&amp;day=17&amp;room=1"><span class="cal_current_day">17</span></a></td>
<td class="cellcalendar"><a onclick="charger();" class="calendar" title="Voir toutes les ressources du domaine pour cette journée" href="day.php?year=2015&amp;month=01&amp;day=18&amp;room=1">18</a></td>
</tr>
<tr><td class="calendarcol1 lienSemaine"><a onclick="charger();" title="Voir les réservations de la semaine pour cette ressource" href="week.php?year=2015&amp;month=01&amp;day=22&amp;area=1&amp;room=1">04</a></td>
<td class="cellcalendar"><a onclick="charger();" class="calendar" title="Voir toutes les ressources du domaine pour cette journée" href="day.php?year=2015&amp;month=01&amp;day=19&amp;room=1">19</a></td>
<td class="cellcalendar"><a onclick="charger();" class="calendar" title="Voir toutes les ressources du domaine pour cette journée" href="day.php?year=2015&amp;month=01&amp;day=20&amp;room=1">20</a></td>
<td class="cellcalendar"><a onclick="charger();" class="calendar" title="Voir toutes les ressources du domaine pour cette journée" href="day.php?year=2015&amp;month=01&amp;day=21&amp;room=1">21</a></td>
<td class="cellcalendar"><a onclick="charger();" class="calendar" title="Voir toutes les ressources du domaine pour cette journée" href="day.php?year=2015&amp;month=01&amp;day=22&amp;room=1">22</a></td>
<td class="cellcalendar"><a onclick="charger();" class="calendar" title="Voir toutes les ressources du domaine pour cette journée" href="day.php?year=2015&amp;month=01&amp;day=23&amp;room=1">23</a></td>
<td class="cellcalendar"><a onclick="charger();" class="calendar" title="Voir toutes les ressources du domaine pour cette journée" href="day.php?year=2015&amp;month=01&amp;day=24&amp;room=1">24</a></td>
<td class="cellcalendar"><a onclick="charger();" class="calendar" title="Voir toutes les ressources du domaine pour cette journée" href="day.php?year=2015&amp;month=01&amp;day=25&amp;room=1">25</a></td>
</tr>
<tr><td class="calendarcol1 lienSemaine"><a onclick="charger();" title="Voir les réservations de la semaine pour cette ressource" href="week.php?year=2015&amp;month=01&amp;day=29&amp;area=1&amp;room=1">05</a></td>
<td class="cellcalendar"><a onclick="charger();" class="calendar" title="Voir toutes les ressources du domaine pour cette journée" href="day.php?year=2015&amp;month=01&amp;day=26&amp;room=1">26</a></td>
<td class="cellcalendar"><a onclick="charger();" class="calendar" title="Voir toutes les ressources du domaine pour cette journée" href="day.php?year=2015&amp;month=01&amp;day=27&amp;room=1">27</a></td>
<td class="cellcalendar"><a onclick="charger();" class="calendar" title="Voir toutes les ressources du domaine pour cette journée" href="day.php?year=2015&amp;month=01&amp;day=28&amp;room=1">28</a></td>
<td class="cellcalendar"><a onclick="charger();" class="calendar" title="Voir toutes les ressources du domaine pour cette journée" href="day.php?year=2015&amp;month=01&amp;day=29&amp;room=1">29</a></td>
<td class="cellcalendar"><a onclick="charger();" class="calendar" title="Voir toutes les ressources du domaine pour cette journée" href="day.php?year=2015&amp;month=01&amp;day=30&amp;room=1">30</a></td>
<td class="cellcalendar"><a onclick="charger();" class="calendar" title="Voir toutes les ressources du domaine pour cette journée" href="day.php?year=2015&amp;month=01&amp;day=31&amp;room=1">31</a></td>
<td class="cellcalendar"> </td>
</tr>
</tbody></table>
<br>
<div class="panel panel-default">
	<div class="panel-heading">Consultation :</div>
		<div class="panel-body">
			<form class="ressource" id="area_001" action="/GRR/week.php">
			<input class="btn btn-primary btn-lg btn-block item_select" name="1" value="Visites" onclick="location.href='index.php?page=visites' ;charger();">
			<input class="btn btn-primary btn-lg btn-block item_select" name="1" value="Praticiens" onclick="location.href='index.php?page=practitioner' ;charger();">
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
