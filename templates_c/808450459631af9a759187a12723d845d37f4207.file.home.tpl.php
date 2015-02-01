<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-02-01 18:12:11
         compiled from ".\tpl\pages\home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:357654ce40192707b9-37792454%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '808450459631af9a759187a12723d845d37f4207' => 
    array (
      0 => '.\\tpl\\pages\\home.tpl',
      1 => 1422810721,
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
    'player1Name' => 0,
    'player1Division' => 0,
    'player1Win' => 0,
    'player1Loose' => 0,
    'player1Ratio' => 0,
    'player2Name' => 0,
    'player2Division' => 0,
    'player2Win' => 0,
    'player2Loose' => 0,
    'player2Ratio' => 0,
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
            
					<b><?php echo $_smarty_tpl->tpl_vars['player1Name']->value;?>
</b>
            
            
					<div class="responsive-table-line" style="margin:0px auto;max-width:700px;">
						<table class="table table-bordered table-condensed table-body-center" >
					
						<thead>
						
						<td colspan="2">Parties classées</td>
						
						</thead>
						<tbody>
						<tr>
							<td data-title="Droit">Division</td>
							<td data-title="Valeur alphanumérique"><?php echo $_smarty_tpl->tpl_vars['player1Division']->value;?>
</td>
						</tr>
						<tr>
							<td data-title="Droit">Victoires</td>
							<td data-title="Valeur alphanumérique"><?php echo $_smarty_tpl->tpl_vars['player1Win']->value;?>
</td>
						</tr>
						<tr>
							<td data-title="Droit">Défaites</td>
							<td data-title="Valeur alphanumérique"><?php echo $_smarty_tpl->tpl_vars['player1Loose']->value;?>
</td>
						</tr>
						
						<tr>
							<td data-title="Droit"><B>Ratio</b></td>
							<td data-title="Valeur alphanumérique"><?php echo $_smarty_tpl->tpl_vars['player1Ratio']->value;?>
</td>
						</tr>
					
						</tbody>
						</table>
				
					</div>
            </div>
        </div>
        
        <div class="col-md-6 brd player2">
            <div class="center-block">
            
            <b><?php echo $_smarty_tpl->tpl_vars['player2Name']->value;?>
</b>
            
            
					<div class="responsive-table-line" style="margin:0px auto;max-width:700px;">
						<table class="table table-bordered table-condensed table-body-center" >
					
						<thead>
						
						<td colspan="2">Parties classées</td>
						
						</thead>
						<tbody>
						<tr>
							<td data-title="Droit">Division</td>
							<td data-title="Valeur alphanumérique"><?php echo $_smarty_tpl->tpl_vars['player2Division']->value;?>
</td>
						</tr>
						<tr>
							<td data-title="Droit">Victoires</td>
							<td data-title="Valeur alphanumérique"><?php echo $_smarty_tpl->tpl_vars['player2Win']->value;?>
</td>
						</tr>
						<tr>
							<td data-title="Droit">Défaites</td>
							<td data-title="Valeur alphanumérique"><?php echo $_smarty_tpl->tpl_vars['player2Loose']->value;?>
</td>
						</tr>
						
						<tr>
							<td data-title="Droit"><B>Ratio</b></td>
							<td data-title="Valeur alphanumérique"><?php echo $_smarty_tpl->tpl_vars['player2Ratio']->value;?>
</td>
						</tr>
					
						</tbody>
						</table>
				
					</div>
            
            
            
            </div>
        </div>
    </div>
</div>
<?php }} ?>
