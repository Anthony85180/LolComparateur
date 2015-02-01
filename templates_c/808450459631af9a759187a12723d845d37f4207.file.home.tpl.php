<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-02-01 17:21:54
         compiled from ".\tpl\pages\home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:357654ce40192707b9-37792454%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '808450459631af9a759187a12723d845d37f4207' => 
    array (
      0 => '.\\tpl\\pages\\home.tpl',
      1 => 1422807710,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '357654ce40192707b9-37792454',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54ce40192c5959_24193562',
  'variables' => 
  array (
    'playerName' => 0,
    'playerDivision' => 0,
    'playerWin' => 0,
    'playerLoose' => 0,
    'playerRatio' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54ce40192c5959_24193562')) {function content_54ce40192c5959_24193562($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('tpl/pages/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



<div id = "principal">
 <div class="row">
        <div class="center-block"></div>
    </div>
    <div class="row">
        <div class="col-md-6 brd player1">
            <div class="center-block">
            
					<b><?php echo $_smarty_tpl->tpl_vars['playerName']->value;?>
</b>
            
            
					<div class="responsive-table-line" style="margin:0px auto;max-width:700px;">
					<table class="table table-bordered table-condensed table-body-center" >
				
				<thead>
				
				<td colspan="2">Parties classées</td>
				
				</thead>
				<tbody>
				<tr>
					<td data-title="Droit">Division</td>
					<td data-title="Valeur alphanumérique"><?php echo $_smarty_tpl->tpl_vars['playerDivision']->value;?>
</td>
				</tr>
				<tr>
					<td data-title="Droit">Victoires</td>
					<td data-title="Valeur alphanumérique"><?php echo $_smarty_tpl->tpl_vars['playerWin']->value;?>
</td>
				</tr>
				<tr>
					<td data-title="Droit">Défaites</td>
					<td data-title="Valeur alphanumérique"><?php echo $_smarty_tpl->tpl_vars['playerLoose']->value;?>
</td>
				</tr>
				
				<tr>
					<td data-title="Droit"><B>Ratio</b></td>
					<td data-title="Valeur alphanumérique"><?php echo $_smarty_tpl->tpl_vars['playerRatio']->value;?>
</td>
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
<?php }} ?>
