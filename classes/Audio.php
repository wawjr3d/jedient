<?php
	require_once dirname(__FILE__) . "/base/BaseItem.php";

	class Audio extends BaseItem {

		private $file;
		private $title = "";
		private $author = "";  
		
		public function getFile() { return $this->file; }
		public function getTitle() { return $this->title; }
		public function getAuthor() { return $this->author; }
					
		public function setFile($value) { $this->file = $value; }
		public function setTitle($value) { $this->title = $value; }
		public function setAuthor($value) { $this->author = $value; }
		
		public function toJSON() { return json_encode(get_object_vars($this)); }
	}