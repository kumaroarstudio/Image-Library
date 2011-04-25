<?php /* Smarty version Smarty-3.0.6, created on 2011-04-18 08:29:56
         compiled from ".\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:153574dab8604ab3660-26587353%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '749422d4cfc3eb5677cf499730392b6accd4d1c7' => 
    array (
      0 => '.\\templates\\index.tpl',
      1 => 1302827527,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '153574dab8604ab3660-26587353',
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
<script src="js/jquery-1.3.2.min.js" type="text/javascript"></script>
<style type="text/css">
body {
	margin: 0;
	padding: 0;
	font-family: "Microsoft YaHei",Tahoma, Arial; 
	border-top: #0063DC 10px solid;
}

.clearfix{
	clear:both;
}

#wapper {
	padding: 20px;
	margin: 10px auto 0;
	width: 960px;
}

#header {
	height: 30px;
}
	.input {
	    border: 1px solid #DDDDDD;
	    font-size: 16px;
	    padding: 5px;
	    width: 350px;
	}
	.input:focus {
	    border: 1px solid #0063DC;
	}
	.btn {
	    background-color: #FEFEFE;
	    border: 1px solid #DDDDDD;
	    color: #0063DC;
	    cursor: pointer;
	    display: inline-block;
	    font-size: 16px;
		padding: 3px;
	    font-weight: normal;
	    line-height: 24px;
	    margin: 0;
	    text-decoration: none;
		width: 100px;
	}
	.btn:focus {
	    border: 1px solid #0063DC;
	}
	
#nav {
	border: 1px solid #DDDDDD;
	padding: 15px;
	margin: 15px 0 15px 0;
}
    #nav a {
    	background: none repeat scroll 0 0 #0063DC;
		border: 1px solid #0063DC;
    	color: #FFFFFF;
    	display: block;
    	float: left;
    	font-size: 14px;
    	padding: 3px;
   	 	text-decoration: none;
		margin-right:5px;
	}
	#nav a:hover {
		background: none repeat scroll 0 0 #FFFFFF;
		color: #0063DC;
	}
	.menu {
    	background-image: url("images/dotted.gif");
    	background-position: left bottom;
    	background-repeat: repeat-x;
    	padding-bottom: 10px;
		margin-bottom:10px;
    	text-align: center;
	}
	.item {
		display:none;
	}
	.item_child {
		display:none;
	}

#TagCloud {
	border: 1px solid #DDDDDD;
	padding: 15px;
}
	#TagCloud a {
	    text-decoration: none;
		color: #0063DC;
	}
	#TagCloud a:hover {
	    background: #0063DC;
		color: #FFF;
	}
</style>
<script type="text/javascript">
	$(document).ready(function(){});
	function slide(num){
		$(".item").hide();
		$(".item_child").hide();
		$("#item"+num).slideDown();
	}
	function slide_child(num){
		$(".item_child").hide();
		$("#item_child"+num).slideDown();
	}
</script>
</head>

<body>
<div id="wapper">
	<div id="header">
		<?php $_template = new Smarty_Internal_Template('static_pages/header.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
	</div>
	<div id="nav">
		<?php $_template = new Smarty_Internal_Template('static_pages/menu.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
	</div>
	<?php $_template = new Smarty_Internal_Template('static_pages/tags.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
</div>
</body>
</html>