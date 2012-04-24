<?php

	foreach (range(1, 5) as $howmany_tweets) {
		ob_start();
	
		include dirname(__FILE__) . "/webapp/includes/latest-tweets.php";
	
		$filecontents = ob_get_contents();

		ob_end_clean();
	 
		$filename = dirname(__FILE__) . "/webapp/includes/latest-tweets-$howmany_tweets.html";
		
		echo "Writing $filename was ";
		$success = file_put_contents ($filename , $filecontents);
		echo ($success ? "successful" : "a failure");
		echo "\n";
		
	}