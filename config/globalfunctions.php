<?php

	require_once $_SERVER['DOCUMENT_ROOT'] . CLASSES_DIR . "/Request.php";
	require_once $_SERVER['DOCUMENT_ROOT'] . CLASSES_DIR . "/EmailSender.php";

	function __autoload($class_name) {
		require_once $_SERVER['DOCUMENT_ROOT'] . CLASSES_DIR . "/$class_name.php";
	}

	function get_script_name() {
		return basename($_SERVER['PHP_SELF']);
	}