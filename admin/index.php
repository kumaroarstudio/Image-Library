<?php

	header("Content-Type:text/html;charset=utf-8");
	require_once ('../config/conn.inc.php');
	require_once ('../libs/Smarty.class.php');
	
	$smarty = new Smarty ();
	
	$smarty->assign('title', "Index");
	
	
/**
 * 
 * Enter description here ...
 * @param unknown_type $dir
 * @param unknown_type $filedirs
 */
function getallfiledirs($dir) {
	$files = array();
    $dir = new DirectoryIterator($dir);
    foreach ($dir as $fileinfo) {
    	if(!$fileinfo->isDot()&&!$fileinfo->isFile())
        	getallfiledirs($fileinfo->getPathname());
		if(!$fileinfo->isDot()&&$fileinfo->isFile())
			array_push ( $files, $fileinfo->getBasename() );
    }
    return $files;
}

    $files = array();
    $files = getallfiledirs('..\\uploads\\photo');
    $smarty->assign('filedirs', array_unique($files));
	$smarty->display('index.tpl');

#FILE-END