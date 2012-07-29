<?php 
	require_once "../config/config.php";
		
	$photoDAO = new PhotoDAO();
    $restRequest = RestUtils::processRequest();  
             	  
	$data = $restRequest->getData();
	$requestVars = $restRequest->getRequestVars();
		
	function populateFromRequest(&$photo, $data) {
		$photo->setTitle($data->title);
		$photo->setImage($data->image);
		$photo->setThumbnail($data->thumbnail);
		$photo->setEventId($data->event_id);
		$photo->setIsActive($data->isActive); 	
	}
	
    switch($restRequest->getMethod()) {
    	
        case "GET":  
            // retrieve a list of users  
            $photos = null;
            
        	if (isset($requestVars["id"])) {
        		$id = $requestVars["id"];
            	$photos = $photoDAO->getById($id);
        	} else if (isset($requestVars["eventId"])) {
        		$eventId = $requestVars["eventId"];
            	$photos = $photoDAO->getByEventId($eventId);
        	} else {
        		$photos = $photoDAO->getAll();
        	}

        	RestUtils::sendResponse(200, JSONUtils::serialize($photos), 'application/json');
            break;  
            
        case "POST":  
			$photo = new Photo();  

			populateFromRequest($photo, $data);

			if ($photoDAO->save($photo)) {
				RestUtils::sendResponse(200, JSONUtils::serialize($photo), 'application/json');
			} else {
				RestUtils::sendResponse(500);
			}
			
            break;
              
        case "PUT":

        	if (!$data->id || $data->id <= 0) { RestUtils::sendResponse(400); }
        	
			$photo = $photoDAO->getById($data->id);
			  
			populateFromRequest($photo, $data);

			if ($photoDAO->save($photo)) {
				RestUtils::sendResponse(200, JSONUtils::serialize($photo), 'application/json');
			} else {
				RestUtils::sendResponse(500);
			}
			
        	break;
        	
        case "DELETE":
        	break;
	}  