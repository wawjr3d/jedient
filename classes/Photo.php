<?php
	require_once dirname(__FILE__) . "/base/BaseItem.php";
	require_once dirname(__FILE__) . "/AlbumDAO.php";

	class Photo extends BaseItem {

		private $file = ""; 
		private $albumId = 0;
		
		private $album = null;
		

		public function getFile() { return $this->file; }
		public function getAlbumId() { return $this->albumId; }
					
		public function setFile($value) { $this->file = $value; }
		public function setAlbumId($value) { $this->albumId = $value; }
		
		public function toJSON() { return json_encode(get_object_vars($this)); }
	}