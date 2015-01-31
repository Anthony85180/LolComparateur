<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-01-18 13:07:39
         compiled from ".\tpl\pages\bd_update.tpl" */ ?>
<?php /*%%SmartyHeaderCode:910954bba20b9877b0-39880964%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '610ba433cb4508da8569ae6b5ba682d087f67e3b' => 
    array (
      0 => '.\\tpl\\pages\\bd_update.tpl',
      1 => 1421524128,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '910954bba20b9877b0-39880964',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54bba20b9dea71_33353773',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54bba20b9dea71_33353773')) {function content_54bba20b9dea71_33353773($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('tpl/pages/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


	<div id="formulaire">
	<form method="post" action="index.php?page=bd_update"
		enctype="multipart/form-data">     
		<input type="hidden" name="MAX_FILE_SIZE" value="2097152">     
		<input type="file" name="fichier">    
		<input type="submit" value="Envoyer">    
	</form>
	
	<a  href="index.php?page=drugs">Retour</a>
	
	</div>
	</body>
</html>
<?php }} ?>
