<?php
	 
	define ('DB_TYPE','mysql');
	define ('DB_HOST','localhost');
	define ('DB_USER','root');
	define ('DB_PWD','123456');
	define ('DB_NAME','imglib');
	define ('DB_CHARSET','utf-8');	
	
	require_once dirname(dirname(__FILE__)).'\include\db_function.func.php';	// Database operation class
	
	// Database connection
	global $db;
	$db = new db_mysql();
	$db->connect(DB_HOST,DB_USER,DB_PWD,DB_NAME,DB_CHARSET);

	/* Time functions to prevent the error using PHP 5.1.x */
	if(function_exists('date_default_timezone_set')) date_default_timezone_set('PRC');
	
#FILE-END