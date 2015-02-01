<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-02-01 18:44:45
         compiled from ".\tpl\pages\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2132654ce660d64f0c8-98793627%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e4c96679fa89a3f0f5fc0938f80b2f5de31c136b' => 
    array (
      0 => '.\\tpl\\pages\\index.tpl',
      1 => 1422808388,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2132654ce660d64f0c8-98793627',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54ce660d67a701_48441718',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54ce660d67a701_48441718')) {function content_54ce660d67a701_48441718($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('tpl/pages/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<form action="index.php?page=home" method="post">

<p>
	<div class="search-box">
		
			<input type="text" name="pseudo" class="search"/>
		
		<select name="serveur">;
		<option value ="euw">EU</option>
		<option value ="euw">NA</option>
		
		<input type="submit" value="Valider" class ="submit" />
		</div>
	
	</p>

</form>
<?php }} ?>
