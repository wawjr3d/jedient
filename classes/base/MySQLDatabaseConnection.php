<?php

	class MySQLDatabaseConnection {

		private $dbAddress = 'localhost';
		private $dbUsername = 'jedient';
		private $dbPassword = 'jedient1';
		private $dbName = 'jedient';
		private $result = null;
		private $connection = null;

		public function __construct() {

		}

		public function executeQuery($query) {

			if ($this->isConnected()) {
				try {
					@$this->result = mysql_query($query);

					return $this->result;
				} catch(Exception $e) {
					throw new MySQLDatabaseConnectionException('Could not execute query: ' . mysql_error());
				}
			} else { throw new MySQLDatabaseConnectionException('Connection not established, cannot execute query'); }
		}

		public function connect() {
			if (!$this->isConnected()) {
				try {
					@$this->connection = mysql_pconnect($this->dbAddress, $this->dbUsername, $this->dbPassword);
					@mysql_select_db($this->dbName);
				} catch(Exception $e) {
					throw new MySQLDatabaseConnectionException('Could not connect to database: ' . mysql_error());
				}

			}
		}

		public function close() {

			if ($this->hasResult()) {
				try {
					if (is_resource($this->result)) {
						@mysql_free_result($this->result);
					}
				} catch(Exception $e) {
					//throw new MySQLDatabaseConnectionException('Could not close connection to database: ' . mysql_error());
				}
			}

			if ($this->isConnected()) {
				try {
					@mysql_close($this->connection);
				} catch(Exception $e) {
					//throw new MySQLDatabaseConnectionException('Could not close connection to database: ' . mysql_error());
				}
			}
		}

		public function isConnected() {
			return $this->connection != false;
		}

		public function hasResult() {
			return $this->result != null;
		}
	}

	class MySQLDatabaseConnectionException extends Exception {
		public function __construct($message = null, $code = 0) {
			parent::__construct($message, $code);
		}
	}