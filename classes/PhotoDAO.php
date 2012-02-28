<?php
	require_once dirname(__FILE__) . "/base/BaseDAO.php";

	class PhotoDAO extends BaseDAO {
		
		const SELECT_ALL_FROM = "SELECT id, file, album_id, is_active, updated_time FROM ";
		const TABLE_NAME = "`photo`";
		const INSERT_FIELDS = "file, album_id, is_active";
		const ITEM_CLASS = "Photo";

		public function populateItem(&$photo, $data) {

			$itemClass = self::ITEM_CLASS;
			
			if ($photo instanceof $itemClass) {
				$photo->setId($data["id"]);
				$photo->setFile($data["file"]);
				$photo->setAlbumId($data["album_id"]);
				$photo->setIsActive($data["is_active"]);
				$photo->setUpdatedTime($data["updated_time"]);
				
				return true;
			}
			
			return false;
		}
			
		public function getByAlbumId($album_id) {
			return $this->getByQuery(self::SELECT_ALL_FROM . self::TABLE_NAME . " WHERE album_id=$album_id ORDER BY id DESC");
		}

		public function deleteByAlbumId($album_id) {
			return $this->getByQuery("UPDATE " . self::TABLE_NAME . " SET is_active=0 WHERE album_id=$album_id");
		}
			
		protected function getInsertValues($item) {
			return "('" . addslashes($item->getFile()) . "', "
				 . "'" . addslashes($item->AlbumId()) . "', "
				 . "'" . addslashes($item->isActive()) . "')";
		}
		
		protected function getUpdateValues($item) {
			return "file='" . addslashes($item->getFile()) . "', "
				 . "album_id='" . addslashes($item->getAlbumId()) . "', "
				 . "is_active='" . addslashes($item->isActive()) . "'";
		}
	}
