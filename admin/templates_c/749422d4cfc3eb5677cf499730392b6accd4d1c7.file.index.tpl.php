<?php /* Smarty version Smarty-3.0.6, created on 2011-04-18 13:35:57
         compiled from ".\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:284054dabcdbdeb46a4-37523816%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '749422d4cfc3eb5677cf499730392b6accd4d1c7' => 
    array (
      0 => '.\\templates\\index.tpl',
      1 => 1303104956,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '284054dabcdbdeb46a4-37523816',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $_smarty_tpl->getVariable('title')->value;?>
</title>
<style type="text/css">
body {
	margin: 0;
	padding: 0;
	font-family: "Microsoft YaHei", Tahoma, Arial;
	border-top: #0063DC 10px solid;
}
.clearfix {
	clear:both;
}
#edit {
	padding: 20px;
	margin: 10px auto 0;
	width: 960px;
}
	#edit a {
    	background: none repeat scroll 0 0 #0063DC;
		border: 1px solid #0063DC;
    	color: #FFFFFF;
    	display: block;
    	float: left;
    	font-size: 12px;
    	padding: 3px;
   	 	text-decoration: none;
		margin-right:5px;
	}
	#edit a:hover {
		background: none repeat scroll 0 0 #FFFFFF;
		color: #0063DC;
	}
	#edit img {
		width:150px;
		min-height:100px;
	}
	.editimgbox {
		width:152px;
		border: 1px solid #0063DC;
		box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.2);
    	float: left;
   	 	margin-bottom: 10px;
    	overflow: hidden;
    	padding: 10px;
    	position: relative;
	 	left: 0px; 
	 	top: 0px;
		margin: 5px;
	}
	.editinfobox {
		width:300px;
		height:100px;
		border: 1px solid #0063DC;
		box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.2);
    	float: left;
   	 	margin-bottom: 10px;
    	overflow: hidden;
    	padding: 10px;
    	position: relative;
	 	left: 0px; 
	 	top: 0px;
		margin: 5px;
	}
</style>
</head>
<body>
<div id="edit">
<?php  $_smarty_tpl->tpl_vars['file'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('filedirs')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['file']->key => $_smarty_tpl->tpl_vars['file']->value){
?>
	<div class="editimgbox"><img src="../uploads/photo/<?php echo $_smarty_tpl->tpl_vars['file']->value;?>
"/></div>
	<div class="editinfobox">
	<a href="">EDIT</a> <a href="">DELETE</a>
	</div>
	<br class="clearfix"/>
<?php }} ?>
</div>
</body>
</html>