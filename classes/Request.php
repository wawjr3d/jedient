<?php

	class Request {

		private static $instance = null;

		private function __construct() { }

		public static function getInstance() {
			if (self::$instance == null) {
				self::$instance = new Request();
			}

			return self::$instance;
		}

		public function getMethod() {
			return $_SERVER['REQUEST_METHOD'];
		}

		public function hasFiles() {
			return !empty($_FILES);
		}

		public function hasFile($file) {
			return isset($_FILES[$file]);
		}

		public function getFileName($file) {
			return basename($_FILES[$file]['name']);
		}

		public function getTemporaryFilePath($file) {
			return $_FILES[$file]['tmp_name'];
		}

		public function getFileExtension($file) {
			$filename = $this->getFileName($file);

			$split_on_dots = explode(".", $filename);

			return !empty($split_on_dots) ? strtolower(end($split_on_dots)) : null;
		}

		public function saveFile($file, $location = null) {

			if ($this->hasFile($file) && $_FILES[$file]['error'] == UPLOAD_ERR_OK) {

				if (!$location) { $location = getcwd() . "/images/" . $this->getFileName($file); }

				return @move_uploaded_file($this->getTemporaryFilePath($file), $location);
			}

			return false;
		}

		public function getParameter($name, $type = null) {
			if ($type == "get") {
				return isset($_GET[$name]) && $_GET[$name] !== NULL ? $_GET[$name] : null;
			} else if ($type == "post") {
				return isset($_POST[$name]) && $_POST[$name] !== NULL ? $_POST[$name] : null;
			} else {
				return isset($_REQUEST[$name]) && $_REQUEST[$name] !== NULL ? $_REQUEST[$name] : null;
			}
		}

		public function validateParameters($params = null) {
			if (!$params) { return false; }


		}

		public function redirect($url) {
			if ($url != NULL) {
				header("Location: $url", true);
				exit;
			}
		}
	}

	$page_request = Request::getInstance();
