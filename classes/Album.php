<?php
	require_once dirname(__FILE__) . "/base/BaseItem.p";
	require_once dirname(__FILE__) . "/PhotoDAO.php";

	class Album extends BaseItem {

		private $thumbnail = '';

		public function getThumbnail() { return stripslashes($this->thumbnail); }

		public function setThumbnail($value) { $this->thumbnail = $value; }
		
		public function toJSON() { return json_encode(get_object_vars($this)); }
	}