<?php

	header("Content-Type:text/html;charset=utf-8");
	require_once 'config/conn.inc.php';
	require_once ('./libs/Smarty.class.php');

	$smarty = new Smarty ();

	#Get tag
	if (!empty($_GET["tag"])) {
		$smarty->assign('title', "TAGS");
		$smarty->assign('keyword', "TAG");
		$smarty->assign('word', $_GET["tag"]);
		
		#TODO Handle SQL Injection
		$SQL = "SELECT imglib_fileid FROM imglib_tag where imglib_tagname = '".($_GET["tag"])."'";
		
		$fileids = $db->getList ( $SQL );
		
		$fileids = explode(',',$fileids[0]['imglib_fileid']);

		$smarty->assign('fileids', $fileids);

	} else if(!empty($_GET["cat"])) {
		$smarty->assign('title', "CATS");
		$smarty->assign('keyword', "CATS");
		$smarty->assign('word', $_GET["cat"]);
		
		#TODO Handle SQL Injection
		#Get the catid by catname
		$SQL = "SELECT imglib_catid, imglib_par FROM imglib_cat where imglib_catname = '".($_GET["cat"])."'";
		$result = $db->getCol ( $SQL );

		#Get all catids
		$catids = array();
		array_push ( $catids, $result[0]);
		while($result) {
			#TODO Handle SQL Injection
			$SQL = "SELECT imglib_catid, imglib_par FROM imglib_cat where imglib_par = ".$result[0];
			$result = $db->getCol ( $SQL );
			while ((list($key, $value) = each($result)) != false) 
				array_push ( $catids, $value );
		}
		
		#Get all fileid which under catids
		$results = array();
		foreach ( $catids as &$catid ){
			#TODO Handle SQL Injection
			$SQL = "SELECT imglib_fileid FROM imglib_file where imglib_catid = ".$catid;
			$result = $db->getList ( $SQL );
			
			while ((list($key, $value) = each($result)) != false) 
				array_push ( $results, $value['imglib_fileid'] );
		}
		$smarty->assign('fileids', $results);
		
		
		$catnames = array();
		foreach ( $catids as &$catid ){
			#TODO Handle SQL Injection
			$SQL = "SELECT imglib_catname FROM imglib_cat where imglib_catid = ".$catid;
			$result = $db->getList ( $SQL );
			while ((list($key, $value) = each($result)) != false) 
				array_push ( $catnames, $value['imglib_catname'] );
		}
		$smarty->assign('catnames', $catnames);
		
		
	} else {
		
		$smarty->assign('title', "SEARCH");
		$smarty->assign('word', $_POST["keywords"]);
		$smarty->assign('keyword', "SEARCH");
		
		$results = array();
		$SQL = "SELECT imglib_fileid FROM imglib_file where imglib_filetitle like '%".$_POST["keywords"]."%'";
		$result = $db->getList ( $SQL );
			
		while ((list($key, $value) = each($result)) != false) 
			array_push ( $results, $value['imglib_fileid'] );
		
		$smarty->assign('fileids', $results);
	}

	$smarty->display('page.tpl');
	
#FILE-END