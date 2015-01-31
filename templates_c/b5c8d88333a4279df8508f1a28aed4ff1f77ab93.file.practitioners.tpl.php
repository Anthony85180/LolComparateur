<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-01-18 23:05:23
         compiled from ".\tpl\pages\practitioners.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3148254bc2a7dd447c5-29664772%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b5c8d88333a4279df8508f1a28aed4ff1f77ab93' => 
    array (
      0 => '.\\tpl\\pages\\practitioners.tpl',
      1 => 1421618671,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3148254bc2a7dd447c5-29664772',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54bc2a7dde90c0_91345041',
  'variables' => 
  array (
    'practitioners' => 0,
    'p' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54bc2a7dde90c0_91345041')) {function content_54bc2a7dde90c0_91345041($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('tpl/pages/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<?php echo $_smarty_tpl->getSubTemplate ('tpl/pages/left_menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	
		<div id ="principal">
			<div id ="listePraticiens">
				<table>
					<thead>
						<tr><th>Titre</th><th>Liste des praticiens</th></tr>
					</thead>
					<tbody>
						<?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['practitioners']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>
						<tr><td><?php echo $_smarty_tpl->tpl_vars['p']->value['PRA_NOM'];?>
 <?php echo $_smarty_tpl->tpl_vars['p']->value['PRA_PRENOM'];?>
</td> <td><?php echo $_smarty_tpl->tpl_vars['p']->value['PRA_ADRESSE'];?>
</td></tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>

<?php }} ?>
