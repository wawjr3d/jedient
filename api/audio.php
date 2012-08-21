<?php 
	require_once "../config/config.php";
	
	$audioDAO = new AudioDAO();
	
    $restRequest = RestUtils::processRequest();  

	$data = $restRequest->getData();
	$requestVars = $restRequest->getRequestVars();
		
	function populateFromRequest(&$audio, $data) {
		$audio->setFile($data->file);
		$audio->setTitle($data->title);
		$audio->setAuthor($data->author);
		$audio->setIsActive(isset($data->isActive) ? $data->isActive : false);		
	}
	
    switch($restRequest->getMethod()) {
    	
        case "GET":  
            // retrieve a list of users  
            $audios = null;
            
        	if (isset($requestVars["id"])) {
        		$id = $requestVars["id"];
        		
            	$audios = $audioDAO->getById($id);
        	} else {
        		$audios = $audioDAO->getAll();
        	}

			if ($audios) {
        		RestUtils::sendJSONResponse(200, $audios);				
			} else {
				RestUtils::sendJSONResponse(404, new Exception("Could not find the requested resource"));
			}

            break;  
            
        case "POST":  
        
        	if (isset($requestVars["action"])) {
        		$action = $requestVars["action"];
        		
        		if ($action == "generatePlaylist") {
        			$autoPlay = false;
        			
        			$audios = $audioDAO->getAllActive();
        			$playlistAudios = array();
        			
        			foreach ($audios as $audio) {
        				$playlistAudio = new PlaylistAudio($audio->getFile(), $audio->getTitle(), $audio->getAuthor(), $autoPlay);
        				$autoPlay = true;
        				
        				array_push($playlistAudios, $playlistAudio);
        			}
        			
        			$jsonUtils = new JSONUtils();
        			$playlistAudiosJSON = $jsonUtils->serializeArray($playlistAudios);
        			
        			if (file_put_contents(WEBAPP_DIR . "/includes/audio.json", $playlistAudiosJSON)) {
        				RestUtils::sendResponse(200, $playlistAudiosJSON, "application/json");
        			} else {
        				RestUtils::sendResponse(500, new Exception("There was a problem generating the playlist"));
        			}
        		}
        	} else {
				$audio = new Audio();  
				
				populateFromRequest($audio, $data); 
	
				if ($audioDAO->save($audio)) {
					RestUtils::sendJSONResponse(200, $audio);
				} else {
					RestUtils::sendJSONResponse(500, new Exception("There was a problem creating the audio"));
				}
        	}

            break;
              
        case "PUT":

        	if (!$data->id || $data->id <= 0) {
        		RestUtils::sendJSONResponse(400, new Exception("An id is required to update an audio"));
			}
        	
			$audio = $audioDAO->getById($data->id);
			  
			populateFromRequest($audio, $data);

			if ($audioDAO->save($audio)) {
				RestUtils::sendJSONResponse(200, $audio);
			} else {
				RestUtils::sendJSONResponse(500, new Exception("There was a problem updating the audio"));
			}
			
        	break;
        	
        case "DELETE":
        	break;
	}  