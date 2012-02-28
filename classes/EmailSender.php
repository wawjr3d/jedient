<?php

	class EmailSender {

		private static $instance = null;

		private $to = '';
		private $subject = '';
		private $message = '';
		private $from_name = '';
		private $from_email = '';
		private $reply_email = '';
		private $header = '';
		private $type = "text/plain";
		private $character_set = "iso-8859-1";

		// constructor
		private function __construct() {
		}

		public static function getInstance() {
			if (self::$instance == null) {
				self::$instance = new EmailSender();
			}

			return self::$instance;
		}

		// methods
		public function send() {
			$this->createHeader();

			if (@mail($this->getTo(), $this->getSubject(), $this->getMessage(), $this->getHeader())) {
				return true;
			} else {
				return false;
			}
		}

		public function createHeader() {
			$from = "From: " . $this->getFromName() . "<" . $this->getFromEmail() . ">\r\n";
			$reply = "Reply-To: " . $this->getReplyEmail() . "\r\n";
			$params = "MIME-Version: 1.0\r\n"
						. "Content-type: " . $this->getType() . "; "
						. "charset=" . $this->getCharacterSet() . "\r\n";

			$this->setHeader($from . $reply . $params);

			return $this->header;
		}


		// getters
		public function getTo() { return $this->to; }
		public function getSubject() { return $this->subject; }
		public function getMessage() { return $this->message; }
		public function getFromName() { return $this->from_name; }
		public function getFromEmail() { return $this->from_email; }
		public function getReplyEmail() { return $this->reply_email; }
		public function getHeader() { return $this->header; }
		public function getType() { return $this->type; }
		public function getCharacterSet() { return $this->character_set; }

		// setters
		public function setTo($value) { $this->to = $value; }
		public function setSubject($value) { $this->subject = $value; }
		public function setMessage($value) { $this->message = $value; }
		public function setFromName($value) { $this->from_name = $value; }
		public function setFromEmail($value) { $this->from_email = $value; }
		public function setReplyEmail($value) { $this->reply_email = $value; }
		public function setHeader($value) { $this->header = $value; }
		public function setType($value) { $this->type = $value; }
		public function setCharacterSet($value) { $this->character_set = $value; }
	}

	$email_sender = EmailSender::getInstance();