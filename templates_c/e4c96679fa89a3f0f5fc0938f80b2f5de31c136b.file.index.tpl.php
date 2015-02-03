<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-02-03 21:38:32
         compiled from ".\tpl\pages\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:156954d11a3f03e0f5-00303175%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e4c96679fa89a3f0f5fc0938f80b2f5de31c136b' => 
    array (
      0 => '.\\tpl\\pages\\index.tpl',
      1 => 1422995866,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '156954d11a3f03e0f5-00303175',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54d11a3f06c771_26958276',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54d11a3f06c771_26958276')) {function content_54d11a3f06c771_26958276($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('tpl/pages/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


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
<?php }} ?>
