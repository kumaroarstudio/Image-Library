<?php /* Smarty version Smarty-3.0.6, created on 2011-04-18 08:42:36
         compiled from ".\templates\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15174dab88fc3b0566-36726159%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0390f83576cc40b989c12a7362afcba143967e43' => 
    array (
      0 => '.\\templates\\login.tpl',
      1 => 1302837127,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15174dab88fc3b0566-36726159',
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

#login {
	margin: 8em auto;
	width: 265px;
	border: 1px solid #0063DC;
	color: #0063DC;
	padding: 10px;
}

	#login p {
		background-image: url("../images/dotted.gif");
		background-position: left bottom;
		background-repeat: repeat-x;
		padding-bottom: 10px;
		margin-bottom: 10px;
	}

	.input {
		border: 1px solid #DDDDDD;
		font-size: 16px;
		padding: 5px;
		width: 250px;
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
	
	.right {
		text-align: right;
	}
</style>
</head>
<body>
<div id="login">
<form action="" method="post">
	<p>Log in:</p>
	<p>USERNAME<input type="text" maxlength="100" class="input"
		name="username" /><br class="clearfix" />
	PASSWORD<input type="password" maxlength="100" class="input"
		name="password" /></p>
	<div class="right"><input type="submit" class="btn" value="Log in" /></div>
</form>
</div>
</body>
</html>