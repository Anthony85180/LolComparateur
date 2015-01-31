<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-01-27 22:16:06
         compiled from ".\tpl\pages\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:695854bab9df7c4d82-72327024%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ba3e94624f3a4caf0cae2f3cdab438f90d52ad0b' => 
    array (
      0 => '.\\tpl\\pages\\index.tpl',
      1 => 1422393363,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '695854bab9df7c4d82-72327024',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54bab9df7fe598_96181898',
  'variables' => 
  array (
    'alea' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54bab9df7fe598_96181898')) {function content_54bab9df7fe598_96181898($_smarty_tpl) {?><!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8"/><title>Pharmacopee</title>
	<link rel="stylesheet" href="./web/css/base.css" media="screen" />
</head>
<?php echo '<script'; ?>
 text ="text/javascript" src="./web/js/Crypt/sha256.js"> <?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 text ="text/javascript" >

function encrypt(frm) {
  frm.style.visibility = "hidden";
  var mdp = frm.password.value;
  var alea = frm.alea.value;
 frm.password.value = SHA256(SHA256(mdp)+alea);
 return true;
}

<?php echo '</script'; ?>
>
<body>

<div id="formulaire">
<form action="index.php" method="post" onsubmit ="return encrypt(this)">
	
	<fieldset>
		<legend>AUTHENTIFICATION  </legend>				     

			    
		<input type="text" id="identifiant" name="identifiant" size="30" required="required" value=""
		placeholder="Votre  identifiant"/>
		
				    
		<input type="password" id="password" name="password" size="30" required="required" value=""
		placeholder=" Votre mot de passe"/>
	
		<input type="hidden" name="alea" value="<?php echo $_smarty_tpl->tpl_vars['alea']->value;?>
"/>
		
	<input type="submit" value="Connexion"/>
</div>

<div id="bouton">
</form>
<form method="link" action="account.php"><input type="submit" value="Creer un compte" ></form>
</body>
</div>
</html>
<?php }} ?>
