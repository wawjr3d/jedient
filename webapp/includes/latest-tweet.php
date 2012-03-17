<?php
		$endpoint = "http://search.twitter.com/search.json";
		
		$data = array("q" => "#agileuxnyc",
              		"result_type" => "recent",
              		"rpp" => 1);

		$request =  implode("?", array($endpoint, http_build_query($data)));

    $session = curl_init($request); 
    curl_setopt($session, CURLOPT_HEADER, false); 
  	curl_setopt($session, CURLOPT_RETURNTRANSFER, true); 
		$response = curl_exec($session); 
  	curl_close($session); 
  	
  	$json_response = json_decode($response);
  	
  	$tweet = $json_response->results[0];
  	$tweet_id = $tweet->id_str;
  	$tweet_created_at = $tweet->created_at;
  	$tweet_text = $tweet->text;
  	
  	$tweet_link = "http://www.twitter.com";

  	echo "<a href='$tweet_link'>$tweet_text</a>";