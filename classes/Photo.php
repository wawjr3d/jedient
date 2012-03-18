<?php
	require_once dirname(__FILE__) . "/base/BaseItem.php";

	class Photo extends BaseItem {

		private $title = "";
		private $image = "";
		private $thumbnail = "";  
		private $eventId = 0;
		
		public function getTitle() { return $this->title; }
		public function getImage() { return $this->image; }
		public function getThumbnail() { return $this->thumbnail; }
		public function getEventId() { return $this->eventId; }
					
		public function setTitle($value) { $this->title = $value; }
		public function setImage($value) { $this->image = $value; }
		public function setThumbnail($value) { $this->thumbnail = $value; }
		public function setEventId($value) { $this->eventId = $value; }
	}