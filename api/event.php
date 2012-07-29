<?php 
	require_once "../config/config.php";
	
	$eventDAO = new EventDAO();
    $restRequest = RestUtils::processRequest();  
             	  
	$data = $restRequest->getData();
	$requestVars = $restRequest->getRequestVars();
		
	function populateFromRequest(&$event, $data) {
		$event->setDate($data->date);
		$event->setVenue($data->venue);
		$event->setAddress($data->address);
		$event->setMapLink($data->mapLink);
		$event->setAdditionalDetails($data->additionalDetails);
		$event->setIsActive($data->isActive);		
	}
	
    switch($restRequest->getMethod()) {
    	
        case "GET":  
            // retrieve a list of users  
            $events = null;
            
        	if (isset($requestVars["id"])) {
        		$id = $requestVars["id"];
        		
            	$events = $eventDAO->getById($id);
        	} else {
        		$events = $eventDAO->getAll();
        	}

        	RestUtils::sendResponse(200, JSONUtils::serialize($events), 'application/json');
            break;  
            
        case "POST":  
			$event = new Event();  
			
			populateFromRequest($event, $data); 

			if ($eventDAO->save($event)) {
				RestUtils::sendResponse(200, JSONUtils::serialize($event), 'application/json');
			} else {
				RestUtils::sendResponse(500);
			}
			
            break;
              
        case "PUT":

        	if (!$data->id || $data->id <= 0) { RestUtils::sendResponse(400); }
        	
			$event = $eventDAO->getById($data->id);
			  
			populateFromRequest($event, $data);

			if ($eventDAO->save($event)) {
				RestUtils::sendResponse(200, JSONUtils::serialize($event), 'application/json');
			} else {
				RestUtils::sendResponse(500);
			}
			
        	break;
        	
        case "DELETE":
        	break;
	}  