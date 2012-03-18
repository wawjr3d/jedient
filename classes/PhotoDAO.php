<?php
	require_once dirname(__FILE__) . "/base/BaseDAO.php";

	class PhotoDAO extends BaseDAO {
		
		const SELECT_ALL_FROM = "SELECT id, title, image, thumbnail, event_id, is_active, updated_time FROM ";
		const TABLE_NAME = "`photo`";
		const INSERT_FIELDS = "title, image, thumbnail, event_id, is_active";
		const ITEM_CLASS = "Photo";

		public function populateItem(&$photo, $data) {

			$itemClass = self::ITEM_CLASS;
			
			if ($photo instanceof $itemClass) {
				$photo->setId($data["id"]);
				$photo->setTitle($data["title"]);
				$photo->setImage($data["image"]);
				$photo->setThumbnail($data["thumbnail"]);
				$photo->setEventId($data["event_id"]);
				$photo->setIsActive($data["is_active"]);
				$photo->setUpdatedTime($data["updated_time"]);
				
				return true;
			}
			
			return false;
		}
			
		public function getByEventId($event_id) {
			return $this->getByQuery(self::SELECT_ALL_FROM . self::TABLE_NAME . " WHERE event_id=$event_id ORDER BY id DESC");
		}

		public function deleteByEventId($event_id) {
			return $this->getByQuery("UPDATE " . self::TABLE_NAME . " SET is_active=0 WHERE event_id=$event_id");
		}
			
		protected function getInsertValues($item) {
			return "('" . addslashes($item->getTitle()) . "', "
				 . "'" . addslashes($item->getImage()) . "', "
				 . "'" . addslashes($item->getThumbnail()) . "', "
				 . "'" . addslashes($item->getEventId()) . "', "
				 . "'" . addslashes($item->isActive()) . "')";
		}
		
		protected function getUpdateValues($item) {
			return "title='" . addslashes($item->getTitle()) . "', "
				 . "image='" . addslashes($item->getImage()) . "', "
				 . "thumbnail='" . addslashes($item->getThumbnail()) . "', "
				 . "event_id='" . addslashes($item->getEventId()) . "', "
				 . "is_active='" . addslashes($item->isActive()) . "'";
		}
	}
