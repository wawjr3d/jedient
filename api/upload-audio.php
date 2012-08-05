<?php
	require_once "../config/config.php";
		
	$restRequest = RestUtils::processRequest();
	
	$data = $restRequest->getData();
	$requestVars = $restRequest->getRequestVars(); 
	
	if ($restRequest->getMethod() != "POST") {
		RestUtils::sendResponse(400, new Exception("Only POSTs are accepted for uploading audio"));
	} else {
		$filename = isset($requestVars["filename"]) ? $requestVars["filename"] : false;
		$audioDir = "audio";
		$webappDir = dirname(__FILE__) . "/../webapp";
		$relativeFileLocation = "media/$audioDir/$filename";
		
	    if ($filename) {
			move_uploaded_file($_FILES[$requestVars["filekey"]]["tmp_name"], "$webappDir/$relativeFileLocation");
			
	        $fileResponse = new FileResponse($relativeFileLocation);
	        
	        RestUtils::sendJSONResponse(200, $fileResponse);
	    } else {
	    	RestUtils::sendJSONResponse(400, new Exception("You must submit a filename for the file you're trying to upload"));	
	    }  
	}