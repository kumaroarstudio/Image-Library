<?php

	/**
	 * 
	 * @package admin
	 * @see
	 */
	require_once ('../config/conn.inc.php');
	require_once ('../libs/Smarty.class.php');

	$smarty = new Smarty ();
	
	#Generate static page of tag page.
	$SQL = "SELECT imglib_fileid, imglib_filename, imglib_filetitle, imglib_tagids, imglib_catid FROM imglib_file";
	$files = $db->getList ( $SQL );
	
	#create static page
	foreach ( $files as &$value ) {
		#File name
		$smarty->assign('file', $value);
		
		#assign cat
		$catnames = array();
		#TODO Handle SQL Injection
		$SQL = "SELECT imglib_catname, imglib_par FROM imglib_cat where imglib_catid = '".$value['imglib_catid']."'";
		$result = $db->getList ( $SQL );
		array_push ( $catnames, $result[0]['imglib_catname'] );
		
		while($result[0]['imglib_par'] != 0){
			#TODO Handle SQL Injection
			$SQL = "SELECT imglib_catname, imglib_par FROM imglib_cat where imglib_catid = '".$result[0]['imglib_par']."'";
			$result = $db->getList ( $SQL );
			array_push ( $catnames, $result[0]['imglib_catname'] );
		}
		$catnames = array_reverse($catnames);
		$smarty->assign('catnames', $catnames);
		
		#assign tag
		$tagnames = array();
		
		$tagids = explode(",",$value['imglib_tagids']);
		foreach ( $tagids as &$tagid ){
			#TODO Handle SQL Injection
			$SQL = "SELECT imglib_tagname FROM imglib_tag where imglib_tagid = '".$tagid."'";
			$tagname = $db->getList ( $SQL );
			array_push ( $tagnames, $tagname );
		}
		$smarty->assign('tagnames', $tagnames);
		
		$content = $smarty->fetch ( '../templates/loop.tpl' );
		$fp = fopen ( '../static_pages/box/'.$value ["imglib_fileid"].'.html', 'w' );
		fwrite ( $fp, $content );
		fclose ( $fp );
	}

#FILE-END