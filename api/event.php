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
		$event->setIsActive(isset($data->isActive) ? $data->isActive : false);		
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

			if ($events) {
        		RestUtils::sendJSONResponse(200, $events);				
			} else {
				RestUtils::sendJSONResponse(404, new Exception("Could not find the requested resource"));
			}

            break;  
            
        case "POST":  
			$event = new Event();  
			
			populateFromRequest($event, $data); 

			if ($eventDAO->save($event)) {
				RestUtils::sendJSONResponse(200, $event);
			} else {
				RestUtils::sendJSONResponse(500, new Exception("There was a problem creating the event"));
			}
			
            break;
              
        case "PUT":

        	if (!$data->id || $data->id <= 0) {
        		RestUtils::sendJSONResponse(400, new Exception("An id is required to update an event"));
			}
        	
			$event = $eventDAO->getById($data->id);
			  
			populateFromRequest($event, $data);

			if ($eventDAO->save($event)) {
				RestUtils::sendJSONResponse(200, $event);
			} else {
				RestUtils::sendJSONResponse(500, new Exception("There was a problem updating the event"));
			}
			
        	break;
        	
        case "DELETE":
        	break;
	}  