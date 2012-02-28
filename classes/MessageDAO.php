<?php
	require_once dirname(__FILE__) . "/base/BaseMessageDAO.php";

	class MessageDAO extends BaseMessageDAO {

		public function getBySenderUserId($user_id) {
			return $this->getByCustomQuery(
				"SELECT " .
					"m.* " .
				"FROM " .
					self::TABLE_NAME . " m " .
					"INNER JOIN " . ProfileDAO::TABLE_NAME . " p ON (m.sender_id = p.id) " .
					"INNER JOIN " . UserDAO::TABLE_NAME . " u ON (p.user_id = u.id) " .
				"WHERE " .
					"u.id = $user_id " .
				"ORDER BY m.sent_time DESC"
			);
		}

		public function getByRecipientUserId($user_id) {
			return $this->getByCustomQuery(
				"SELECT " .
					"m.* " .
				"FROM " .
					self::TABLE_NAME . " m " .
					"INNER JOIN " . ProfileDAO::TABLE_NAME . " p ON (m.recipient_id = p.id) " .
					"INNER JOIN " . UserDAO::TABLE_NAME . " u ON (p.user_id = u.id) " .
				"WHERE " .
					"u.id = $user_id " .
				"ORDER BY m.sent_time DESC"
			);
		}

		public function getByNewMessagesByRecipientUserId($user_id) {

			return $this->getByCustomQuery(
				"SELECT " .
					"m.* " .
				"FROM " .
					self::TABLE_NAME . " m " .
					"INNER JOIN " . ProfileDAO::TABLE_NAME . " p ON (m.recipient_id = p.id) " .
					"INNER JOIN " . UserDAO::TABLE_NAME . " u ON (p.user_id = u.id) " .
				"WHERE " .
					"u.id = $user_id " .
					"AND m.is_opened = 0 " .
				"ORDER BY m.sent_time DESC"
			);

		}

	}
