<?php

	abstract class BaseItem {

		protected $id = 0;
		private $inDB = false;
		protected $isActive = true;
		protected $updatedTime = null;

		public function getId() { return $this->id; }
		public function isInDB() { return $this->inDB; }
		public function isActive() { return $this->isActive; }
		public function getUpdatedTime() { $this->updatedTime; }

		public function setId($value) { $this->id = $value; }
		public function setInDB($value) { $this->inDB = (bool) $value; }
		public function setIsActive($value) { $this->isActive = (bool) $value; }
		public function setUpdatedTime($value) { $this->updatedTime = $value; }
		
				// privates not accessible
		abstract public function toJSON();
	}