<?php 
	require_once dirname(__FILE__) . "/base/SerializableAsJSON.php";
	
	class JSONUtils {
		
		public function serialize($object) {
			if ($object instanceof SerializableAsJSON) {
				return $this->serializeBaseItem($object);
			} else if (is_array($object)) {
				return $this->serializeArray($object);
			} else if ($object instanceof Exception) {
				return $this->serializeException($object);
			}
			
			return "";
		}
		
		public function serializeBaseItem($baseItem) {
			if ($baseItem instanceof SerializableAsJSON) {
				return $baseItem->toJSON();
			}
			
			return "";
		}
		
		public function serializeArray($array) {
			if (is_array($array)) {
				$serializedItems = array();				
				$serialized = "[";
				
				foreach ($array as $item) {
					array_push($serializedItems, $this->serialize($item));
				}
				
				$serialized .= implode(",\n", $serializedItems);
				$serialized .= "]";
				
				return $serialized;
			}
			
			return "";
		}
		
		public function serializeException($exception) {
			if ($exception instanceof Exception) {
				$translationObject = array("error" => $exception->getMessage());
				return json_encode($translationObject);
			}
			
			return "";
		}
	}