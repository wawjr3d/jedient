<?php 
	
	class JSONUtils {
		
		public static function serialize($mixed) {
			
			if (is_array($mixed)) {
				
				$serialized = "[";
				
				$serializedItems = array();
				
				foreach ($mixed as $item) {
					array_push($serializedItems, $item->toJSON());
				}
				
				$serialized .= implode(",\n", $serializedItems);
				
				$serialized .= "]";
				
				return $serialized;
				
			} else if (is_object($mixed)) {
				
				return $mixed->toJSON();
				
			} else {
				
				return "";
				
			}
			
			return "";
		}
		
		
	}