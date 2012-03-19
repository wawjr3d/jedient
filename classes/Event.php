<?php
	require_once dirname(__FILE__) . "/base/BaseItem.php";

	class Event extends BaseItem {

		private $date;
		private $venue = "";
		private $address = "";  
		private $map_link = "";
		private $additional_details = "";
		
		public function getDate() { return $this->date; }
		public function getVenue() { return $this->venue; }
		public function getAddress() { return $this->address; }
		public function getMapLink() { return $this->map_link; }
		public function getAdditionalDetails() { return $this->additional_details; }
					
		public function setDate($value) { $this->date = $value; }
		public function setVenue($value) { $this->venue = $value; }
		public function setAddress($value) { $this->address = $value; }
		public function setMapLink($value) { $this->map_link = $value; }
		public function setAdditionalDetails($value) { $this->additional_details = $value; }
	}