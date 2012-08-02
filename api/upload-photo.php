<?php
	require_once "../config/config.php";
	
	$restRequest = RestUtils::processRequest();
	
	$data = $restRequest->getData();
	$requestVars = $restRequest->getRequestVars(); 
	
	if ($restRequest->getMethod() != "POST") {
		RestUtils::sendResponse(400, new Exception("Only POSTs are accepted for uploading a photo"));
	} else {
		$filename = isset($requestVars["filename"]) ? $requestVars["filename"] : false;
		$photosDir = isset($requestVars["isThumbnail"]) && $requestVars["isThumbnail"] ? "photos/thumbnails" : "photos";
		$webappDir = dirname(__FILE__) . "/../webapp";
		$relativeFileLocation = "images/$photosDir/$filename";
		
	    if ($filename) {
	        move_uploaded_file($_FILES[$requestVars["filekey"]]["tmp_name"], "$webappDir/$relativeFileLocation");
	        
	        $fileResponse = new FileResponse($relativeFileLocation);
	        
	        RestUtils::sendJSONResponse(200, $fileResponse);
	    } else {
	    	RestUtils::sendJSONResponse(400, new Exception("You must submit a filename for the file you're trying to upload"));	
	    }  
	}