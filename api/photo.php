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
		$photo->setEventId($data->eventId);
		$photo->setIsActive(isset($data->isActive) ? $data->isActive : false); 	
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

			if ($photos) {
				RestUtils::sendJSONResponse(200, $photos);	
			} else {
				RestUtils::sendJSONResponse(404, new Exception("Could not find the requested resource"));
			}
        	
            break;  
            
        case "POST":  
			$photo = new Photo();  

			populateFromRequest($photo, $data);

			if ($photoDAO->save($photo)) {
				RestUtils::sendJSONResponse(200, $photo);
			} else {
				RestUtils::sendJSONResponse(500, new Exception("There was a problem creating the photo"));
			}
			
            break;
              
        case "PUT":

        	if (!$data->id || $data->id <= 0) {
        		RestUtils::sendJSONResponse(400, new Exception("An id is required to update a photo")); 
        	}
        	
			$photo = $photoDAO->getById($data->id);
			  
			populateFromRequest($photo, $data);

			if ($photoDAO->save($photo)) {
				RestUtils::sendJSONResponse(200, $photo);
			} else {
				RestUtils::sendJSONResponse(500, new Exception("There was a problem updating the photo"));
			}
			
        	break;
        	
        case "DELETE":
        	break;
	}  