<?php
	session_start();
	error_reporting(E_ALL);
	putenv("TZ=US/Eastern");

	define("ROOT_DIR", "/cms/");
	define("CLASSES_DIR", ROOT_DIR . "classes");
	
	define("SITE_DOMAIN", "http://www.tobagowarners.com");

 	require_once "globalfunctions.php";

// 	require_once "view.php";

// 	require_once "security.php";
?>
