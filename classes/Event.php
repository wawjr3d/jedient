<?php
	require_once dirname(__FILE__) . "/base/BaseItem.php";

	class Event extends BaseItem {

		private $date;
		private $venue = "";
		private $address = "";  
		private $mapLink = "";
		private $additionalDetails = "";
		
		public function getDate() { return $this->date; }
		public function getVenue() { return $this->venue; }
		public function getAddress() { return $this->address; }
		public function getMapLink() { return $this->mapLink; }
		public function getAdditionalDetails() { return $this->additionalDetails; }
					
		public function setDate($value) { $this->date = $value; }
		public function setVenue($value) { $this->venue = $value; }
		public function setAddress($value) { $this->address = $value; }
		public function setMapLink($value) { $this->mapLink = $value; }
		public function setAdditionalDetails($value) { $this->additionalDetails = $value; }
		
		public function toJSON() { return json_encode(get_object_vars($this)); }
	}