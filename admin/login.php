<?php
	header("Content-Type:text/html;charset=utf-8");
	require_once ('../config/conn.inc.php');
	require_once ('../libs/Smarty.class.php');

	$smarty = new Smarty ();
	
	if(isset($_POST["username"]) && isset($_POST["password"])) {
		header('Location: index.php');
		
	} else {
		$smarty->assign('title', "Login");

		$smarty->display('login.tpl');
	}

#FILE-END