<?php

	require_once ('../config/conn.inc.php');
	require_once ('../libs/Smarty.class.php');

	$smarty = new Smarty ();
	
	#Generate static page of tag page.
	$SQL = "SELECT imglib_tagname, imglib_tagsize FROM imglib_tag";
	$tags = $db->getList ( $SQL );
	$smarty->assign ( "tags", $tags );
		
	$content = $smarty->fetch ( '../templates/tags.tpl' );
		
	$fp = fopen ( '../static_pages/tags.html', 'w' );
	fwrite ( $fp, $content );
	fclose ( $fp );
	
	
	# Generate static page of categories page.
	$SQL = "SELECT imglib_catid, imglib_catname, imglib_par FROM imglib_cat";
	$cats = $db->getList ( $SQL );
	#print_r($cats);
		
	#first level
	$catstop = array ();
	foreach ( $cats as &$value )
		if ($value ['imglib_par'] == 0)
			array_push ( $catstop, $value );
	$smarty->assign ( 'catstop', $catstop );
	
	#second level
	$catssecond = array ();
	foreach ( $cats as &$value ){
		foreach ( $catstop as &$value2 )
			if($value ['imglib_par'] == $value2['imglib_catid'])
				array_push ( $catssecond, $value );
	}
	$smarty->assign ( 'catssecond', $catssecond );
			
	#third level
	$catsthird = array ();
	foreach ( $cats as &$value ){
		foreach ( $catssecond as &$value2 )
			if($value ['imglib_par'] == $value2['imglib_catid'])
				array_push ( $catsthird, $value );
	}
	$smarty->assign ( 'catsthird', $catsthird );
	
	$content = $smarty->fetch ( '../templates/menu.tpl' );
		
	$fp = fopen ( '../static_pages/menu.html', 'w' );
	fwrite ( $fp, $content );
	fclose ( $fp );

#FILE-END