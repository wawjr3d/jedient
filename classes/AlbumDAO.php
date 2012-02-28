<?php
	require_once dirname(__FILE__) . "/base/BaseDAO.php";

	class AlbumDAO extends BaseDAO {
	
		const SELECT_ALL_FROM = "SELECT id, thumbnail, is_active, updated_time FROM ";
		const TABLE_NAME = "`album`";
		const INSERT_FIELDS = "thumbnail, is_active";
		const ITEM_CLASS = "Album";

		public function populateItem(&$album, $data) {

			$itemClass = self::ITEM_CLASS;
			
			if ($album instanceof $itemClass) {
				$album->setId($data["id"]);
				$album->setThumbnail($data["thumbnail"]);
				$album->setIsActive($data["is_active"]);
				$album->setUpdatedTime($data["updated_time"]);
				
				return true;
			}
			
			return false;
		}
		
		protected function getInsertValues($item) {
			return "('" . addslashes($item->getThumbnail()) . "', '" . addslashes($item->isActive()) . "')";
		}
		
		protected function getUpdateValues($item) {
			return "thumbnail='" . addslashes($item->getThumbnail()) . "', is_active='" . addslashes($item->isActive()) . "'";
		}
	}