<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-01-29 21:05:03
         compiled from ".\tpl\pages\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3001154ca722e4143d8-67640891%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e4c96679fa89a3f0f5fc0938f80b2f5de31c136b' => 
    array (
      0 => '.\\tpl\\pages\\index.tpl',
      1 => 1422561883,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3001154ca722e4143d8-67640891',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54ca722e4a5909_82690793',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54ca722e4a5909_82690793')) {function content_54ca722e4a5909_82690793($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('tpl/pages/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<form action="index.php?page=home" method="post">

<p>

    <input type="text" name="pseudo" />
	<select name="serveur">;
	<option value ="euw">EU</option>
	<option value ="euw">NA</option>
	
    <input type="submit" value="Valider" />

</p>

</form>
<?php }} ?>