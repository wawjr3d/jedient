<?php
	session_start();
	error_reporting(E_ALL);
	putenv("TZ=US/Eastern");

	define("ROOT_DIR", "/jedient/");
	define("CLASSES_DIR", ROOT_DIR . "classes");

	function __autoload($class_name) {
		require_once $_SERVER['DOCUMENT_ROOT'] . CLASSES_DIR . "/$class_name.php";
	}