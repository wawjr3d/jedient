<?php
	$resource = "http://search.twitter.com/search.json";
	$searchTerm = "jedipgh";
	$tweet_count = isset($howmany_tweets) ? $howmany_tweets : 1;
		
	$data = array("q" => "$searchTerm",
              		"result_type" => "recent",
              		"rpp" => 20,
              		"include_entities" => 1);

	$request = implode("?", array($resource, http_build_query($data)));

    $session = curl_init($request); 
    curl_setopt($session, CURLOPT_HEADER, false); 
  	curl_setopt($session, CURLOPT_RETURNTRANSFER, true); 
	$response = curl_exec($session); 
  	curl_close($session); 
  	
  	$json_response = json_decode($response);
  	$tweets = $json_response->results;
	$filteredTweets = array();
	$i = 0;

	// filter out tweets not from #jedisomethingelse
	foreach($tweets as $tweet) {
		if ($i >= $tweet_count) { break; }
		
		$matched = false;
			
		$hashtags = $tweet->entities->hashtags;
		foreach($hashtags as $found_hashtag) {
			if (strtolower($found_hashtag->text) == strtolower($searchTerm)) {
				$matched = true;
			}
		}
		
		$mentions = $tweet->entities->user_mentions;
		foreach($mentions as $mention) {
			if (strtolower($mention->screen_name) == strtolower($searchTerm)) {
				$matched = true;
			}
		}
		
		if ($matched) {
			array_push($filteredTweets, $tweet);
			$i++;			
		}
	}
		  	
	$tweets = $filteredTweets;
  	
  	if (count($tweets)) {
		if ($tweet_count == 1) {
			$tweet = $tweets[0];
			$tweet_id = $tweet->id_str;
			$tweet_created_at = $tweet->created_at;
			$tweet_text = $tweet->text;
			  	
			$tweet_link = "http://www.twitter.com";
			
			echo "<a href='$tweet_link' target='_blank'>$tweet_text</a>";
		} else {
			echo "<ul>";
		  	foreach($tweets as $tweet) {
				$tweet_id = $tweet->id_str;
			  	$tweet_created_at = $tweet->created_at;
			  	$tweet_text = $tweet->text;
			  	
			  	$tweet_link = "http://www.twitter.com";
			
			  	echo "<li><a href='$tweet_link' target='_blank'>$tweet_text</a></li>";
		  	}
		  	echo "</ul>";
		}
  	}