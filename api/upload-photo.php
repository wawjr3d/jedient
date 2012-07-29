<?php
	require_once "../config/config.php";
	
	$restRequest = RestUtils::processRequest();
	
	$data = $restRequest->getData();
	$requestVars = $restRequest->getRequestVars(); 
	
	if ($restRequest->getMethod() != "POST") {
		RestUtils::sendResponse(400);
	} else {
		$filename = isset($requestVars["filename"]) ? $requestVars["filename"] : false;
		$imageDir = isset($requestVars["isThumbnail"]) && $requestVars["isThumbnail"] ? "images" : "images/bigimages";
		$webappDir = dirname(__FILE__) . "/../webapp";
		$relativeFileLocation = "$imageDir/$filename";
		
	    if ($filename) {  
	        // AJAX call  
	        move_uploaded_file($_FILES[$requestVars["filekey"]]["tmp_name"], "$webappDir/$relativeFileLocation");

	        class FileResponse {
	        	public $filePath;
	        	public function toJSON() { return json_encode(get_object_vars($this)); }	
	        }
	        
	        $fileResponse = new FileResponse();
	        $fileResponse->filePath = $relativeFileLocation;
	        
	        RestUtils::sendResponse(200, JSONUtils::serialize($fileResponse), 'application/json');
	    } else {
	    	RestUtils::sendResponse(400);	
	    }  
	}