<?php

	header("Content-Type:text/html;charset=utf-8");
	require_once 'config/conn.inc.php';
	require_once ('./libs/Smarty.class.php');

	$smarty = new Smarty ();
	
	$smarty->caching = true; 
    $smarty->cache_lifetime = 3600; 

	$smarty->assign('title', "INDEX");

	$smarty->display('index.tpl');
	
#FILE-END