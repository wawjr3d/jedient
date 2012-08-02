<?php
	class FileResponse extends SerializableAsJSON {
		
		private $filePath;
		
		public function __construct($filePath) {
			$this->filePath = $filePath;
		}
		
		public function toJSON() { return json_encode(get_object_vars($this)); }	
	}