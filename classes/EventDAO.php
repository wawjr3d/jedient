<?php
	require_once dirname(__FILE__) . "/base/BaseDAO.php";

	class EventDAO extends BaseDAO {
		
		const SELECT_ALL_FROM = "SELECT id, date, venue, address, map_link, additional_details, is_active, updated_time FROM ";
		const TABLE_NAME = "`event`";
		const INSERT_FIELDS = "date, venue, address, map_link, additional_details, is_active";
		const ITEM_CLASS = "Event";

		public function populateItem(&$event, $data) {

			$itemClass = self::ITEM_CLASS;
			
			if ($event instanceof $itemClass) {
				$event->setId($data["id"]);
				$event->setDate($data["date"]);
				$event->setVenue($data["venue"]);
				$event->setAddress($data["address"]);
				$event->setMapLink($data["map_link"]);
				$event->setAdditionalDetails($data["additional_details"]);
				$event->setIsActive($data["is_active"]);
				$event->setUpdatedTime($data["updated_time"]);
				
				return true;
			}
			
			return false;
		}
			
		protected function getInsertValues($item) {
			return "('" . addslashes($item->getDate()) . "', "
				 . "'" . addslashes($item->getVenue()) . "', "
				 . "'" . addslashes($item->getAddress()) . "', "
				 . "'" . addslashes($item->getMapLink()) . "', "
				 . "'" . addslashes($item->getAdditionalDetails()) . "', "
				 . intval($item->isActive()) . ")";
		}
		
		protected function getUpdateValues($item) {
			return "date='" . addslashes($item->getDate()) . "', "
				 . "venue='" . addslashes($item->getVenue()) . "', "
				 . "address='" . addslashes($item->getAddress()) . "', "
				 . "map_link='" . addslashes($item->getMapLink()) . "', "
				 . "additional_details='" . addslashes($item->getAdditionalDetails()) . "', "
				 . "is_active=" . intval($item->isActive());
		}
	}
