<?php

	class ErrorLogger {

		private static $instance = null;

		private function __construct() {

		}

		public static function getInstance() {
			if (self::instance == null) {
				self::instance = new ErrorLogger();
			}

			return self::instance;
		}

		public function logError($error) {

		}

	}