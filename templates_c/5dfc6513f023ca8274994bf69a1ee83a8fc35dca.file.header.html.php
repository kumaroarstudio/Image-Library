<?php /* Smarty version Smarty-3.0.6, created on 2011-04-18 08:30:27
         compiled from "static_pages/header.html" */ ?>
<?php /*%%SmartyHeaderCode:26224dab8623ab9e89-38825458%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5dfc6513f023ca8274994bf69a1ee83a8fc35dca' => 
    array (
      0 => 'static_pages/header.html',
      1 => 1302838111,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26224dab8623ab9e89-38825458',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<form action="page.php" method="post">
	<input type="text" maxlength="100" class="input" name="keywords"/> 
	<input type="submit" class="btn" value="Search" />
	<a href="admin/login.php" style="float:right;color: #0063DC;font-size:10px;">Login</a>
</form>