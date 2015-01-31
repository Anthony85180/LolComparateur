<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-01-18 13:22:33
         compiled from ".\tpl\pages\drugs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2671654bab9eec5f565-26982208%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '174ad83804792101048e92e101cb47b40b4ebb51' => 
    array (
      0 => '.\\tpl\\pages\\drugs.tpl',
      1 => 1421583750,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2671654bab9eec5f565-26982208',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54bab9eed23a33_53247044',
  'variables' => 
  array (
    'indice' => 0,
    'drugs' => 0,
    'Rcount' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54bab9eed23a33_53247044')) {function content_54bab9eed23a33_53247044($_smarty_tpl) {?>
	<?php echo $_smarty_tpl->getSubTemplate ('tpl/pages/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<?php echo $_smarty_tpl->getSubTemplate ('tpl/pages/left_menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	
		<div id ="principal">
		<form action="index.php?page=drugs" method="post">
			
			<div id="formulaire">
				<H1>Pharmacopee</H1>
				<label for="depot">DEPOT LEGAL :</label>
				<textarea name='indice' rows="1" cols="10" readonly='readonly'><?php echo $_smarty_tpl->tpl_vars['drugs']->value[$_smarty_tpl->tpl_vars['indice']->value]['MED_DEPOTLEGAL'];?>
</textarea>

				<label for="nom">NOM COMMERCIAL :</label>
				<textarea rows="1" cols="25" readonly='readonly'><?php echo $_smarty_tpl->tpl_vars['drugs']->value[$_smarty_tpl->tpl_vars['indice']->value]['MED_NOMCOMMERCIAL'];?>
</textarea>

				<label for="famille">FAMILLE :</label>
				<textarea rows="1" cols="55" readonly='readonly'><?php echo $_smarty_tpl->tpl_vars['drugs']->value[$_smarty_tpl->tpl_vars['indice']->value]['FAM_LIBELLE'];?>
</textarea>

				<label for="competition">COMPOSITION :</label>
				<textarea rows="5" cols="55" readonly='readonly'><?php echo $_smarty_tpl->tpl_vars['drugs']->value[$_smarty_tpl->tpl_vars['indice']->value]['MED_COMPOSITION'];?>
</textarea>

				<label for="effets">EFFETS:</label>
				<textarea rows="5" cols="55" readonly='readonly'><?php echo $_smarty_tpl->tpl_vars['drugs']->value[$_smarty_tpl->tpl_vars['indice']->value]['MED_EFFETS'];?>
</textarea>

				<label for="contre">CONTRE INDIC. :</label>
				<textarea rows="5" cols="55" readonly='readonly'><?php echo $_smarty_tpl->tpl_vars['drugs']->value[$_smarty_tpl->tpl_vars['indice']->value]['MED_CONTREINDIC'];?>
</textarea>

				<label for="prix"> PRIX ECHANTILLION:</label>
				<textarea rows="1" cols="6" readonly='readonly'><?php echo $_smarty_tpl->tpl_vars['drugs']->value[$_smarty_tpl->tpl_vars['indice']->value]['MED_PRIXECHANTILLON'];?>
</textarea>
				
			</div>
		
			<div id="bouton">
				<input type="submit" class = "bouton" value="<" name="<"/>
				<input type="submit" class = "bouton" value=">" name=">"/>
				
			</div>
				
			<div id="indice">
				n°:<?php echo $_smarty_tpl->tpl_vars['indice']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['Rcount']->value['nb']-1;?>

			</div>
		
		</form>
			
		</div>
<?php }} ?>
