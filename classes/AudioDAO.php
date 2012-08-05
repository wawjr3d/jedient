<?php
	require_once dirname(__FILE__) . "/base/BaseDAO.php";

	class AudioDAO extends BaseDAO {
		
		const SELECT_ALL_FROM = "SELECT id, file, title, author, is_active, updated_time FROM ";
		const TABLE_NAME = "`audio`";
		const INSERT_FIELDS = "file, title, author, is_active";
		const ITEM_CLASS = "Audio";

		public function populateItem(&$audio, $data) {

			$itemClass = self::ITEM_CLASS;
			
			if ($audio instanceof $itemClass) {
				$audio->setId($data["id"]);
				$audio->setFile($data["file"]);
				$audio->setTitle($data["title"]);
				$audio->setAuthor($data["author"]);
				$audio->setIsActive($data["is_active"]);
				$audio->setUpdatedTime($data["updated_time"]);
				
				return true;
			}
			
			return false;
		}
			
		protected function getInsertValues($item) {
			return "('" . addslashes($item->getFile()) . "', "
				 . "'" . addslashes($item->getTitle()) . "', "
				 . "'" . addslashes($item->getAuthor()) . "', "
				 . intval($item->isActive()) . ")";
		}
		
		protected function getUpdateValues($item) {
			return "file='" . addslashes($item->getFile()) . "', "
				 . "title='" . addslashes($item->getTitle()) . "', "
				 . "author='" . addslashes($item->getAuthor()) . "', "
				 . "is_active=" . intval($item->isActive());
		}
	}
