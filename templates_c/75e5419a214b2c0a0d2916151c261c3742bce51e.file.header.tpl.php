<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-01-27 22:05:44
         compiled from "tpl\pages\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2409354babc64e8eec1-75665411%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '75e5419a214b2c0a0d2916151c261c3742bce51e' => 
    array (
      0 => 'tpl\\pages\\header.tpl',
      1 => 1422110903,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2409354babc64e8eec1-75665411',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54babc64e92b50_64248191',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54babc64e92b50_64248191')) {function content_54babc64e92b50_64248191($_smarty_tpl) {?><!DOCTYPE html>
<html lang="fr">
<head>
        <title>GSB</title>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
        <link rel="stylesheet" href="./web/css/base.css" media="screen" />
        <link rel="stylesheet" href="./web/css/bootstrap.min.css" media="screen" />
         <link rel="stylesheet" href="./web/css/style.css" media="screen" />
        <link rel="shortcut icon" href="/web/images/favicon.ico" />
 
        <?php echo '<script'; ?>
 src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"><?php echo '</script'; ?>
>
</head>
<body>


<div id ="toppanel">
	<div id ="panel">
		<div id ="content">
			<div id ="header">

				<ul id="navigation" > 
					<li><a  href="index.php?page=logout">Déconnnexion</a></li>
					<li><a  href="index.php?page=bd_update">Mise à jour Base de donnée</a></li>
					<li><a  href="index.php?page=admin">Administration</a></li>
				</ul>
				
			</div>
		</div>
	</div>
</div>
<?php }} ?>
