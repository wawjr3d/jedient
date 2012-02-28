<?php
	require_once dirname(__FILE__) . "/ProfileDAO.php";
	require_once dirname(__FILE__) . "/base/BaseMessage.php";

	class Message extends BaseMessage {

		private $recipient = null;
		private $sender = null;

		public function hasRecipient() { return $this->getRecipientId() > 0; }

		public function getRecipient() {
			if ($this->recipient == null) {
				$profileDAO = new ProfileDAO();

				$this->recipient = $profileDAO->getById($this->getRecipientId());
			}

			return $this->recipient;
		}

		public function getRecipientName() {
			$recipient = $this->getRecipient();

			return !empty($recipient) ? $recipient->getFullName() : "";
		}

		public function hasSender() { return $this->getSenderId() > 0; }

		public function getSender() {
			if ($this->sender == null) {
				$profileDAO = new ProfileDAO();

				$this->sender = $profileDAO->getById($this->getSenderId());
			}

			return $this->sender;
		}

		public function getSenderName() {
			$sender = $this->getSender();

			return !empty($sender) ? $sender->getFullName() : "";
		}

		public function getShortBody() {
			$clean_body = strip_tags($this->getBody());

			return strlen($clean_body) > 55 ? substr($clean_body, 0, 50) . "..." : $clean_body;
		}
	}
