<?php
	session_start();
	error_reporting(E_ALL);
	putenv("TZ=US/Eastern");

	define("ROOT_DIR", dirname(__FILE__) . "../../");
	define("CLASSES_DIR", ROOT_DIR . "classes");

	function __autoload($class_name) {
		require_once CLASSES_DIR . "/$class_name.php";
	}