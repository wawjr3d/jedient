<?php 
	require_once "../config/config.php";
	
	
	$albumDAO = new AlbumDAO();
    $restRequest = RestUtils::processRequest();  
             	  
	$data = $restRequest->getData();
	$requestVars = $restRequest->getRequestVars();
		
	function populateFromRequest(&$album, $data) {
		$album->setThumbnail($data->thumbnail);
		$album->setIsActive($data->isActive); 		
	}
	
    switch($restRequest->getMethod()) {
    	
        case "GET":  
            // retrieve a list of users  
            $albums = null;
            
        	if (isset($requestVars["id"])) {
        		$id = $requestVars["id"];
        		
            	$albums = $albumDAO->getById($id);
        	} else {
        		$albums = $albumDAO->getAll();
        	}

        	RestUtils::sendResponse(200, JSONUtils::serialize($albums), 'application/json');
            break;  
            
        case "POST":  
			$album = new Album();  
			
			populateFromRequest($album, $data); 

			if ($albumDAO->save($album)) {
				RestUtils::sendResponse(200, JSONUtils::serialize($album), 'application/json');
			} else {
				RestUtils::sendResponse(500);
			}
			
            break;
              
        case "PUT":

        	if (!$data->id || $data->id <= 0) { RestUtils::sendResponse(400); }
        	
			$album = $albumDAO->getById($data->id);
			  
			populateFromRequest($album, $data);

			if ($albumDAO->save($album)) {
				RestUtils::sendResponse(200, JSONUtils::serialize($album), 'application/json');
			} else {
				RestUtils::sendResponse(500);
			}
			
        	break;
        	
        case "DELETE":
        	break;
	}  