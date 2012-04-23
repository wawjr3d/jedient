<?php
	$resource = "http://search.twitter.com/search.json";
	$hashtag = "#jedi";
	$tweet_count = isset($howmany_tweets) ? $howmany_tweets : 1;
		
	$data = array("q" => $hashtag,
              		"result_type" => "recent",
              		"rpp" => 20);

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
			
		if (preg_match("/$hashtag\b(?!-)/i", $tweet->text)) {
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