<?php
	require_once dirname(__FILE__) . "/base/SerializableAsJSON.php";
	
	class PlaylistAudio extends SerializableAsJSON {
		
		private $url = "";
		private $details = array();
		
		public function __construct($url, $title, $author) {
			$this->url = $url;
			$this->setTitle($title);
			$this->setAuthor($author);
		}
		
		public function getUrl() { return $this->url; }
		public function getDetails() { return $this->details; }
		public function getTitle() { return $this->details["title"]; }
		public function getAuthor() { return $this->details["author"]; }
		
		public function setUrl($value) { $this->url = $value; }
		public function setDetails($value) { $this->details = $value; }
		public function setTitle($value) { $this->details["title"] = $value; }
		public function setAuthor($value) { $this->details["author"] = $value; }
		
		public function toJSON() { return json_encode(get_object_vars($this)); }
	}