<?php

	foreach (range(1, 5) as $howmany_tweets) {
		ob_start();
	
		include "webapp/includes/latest-tweets.php";
	
		$filecontents = ob_get_contents();

		ob_end_clean();
	
		$filename = "webapp/includes/latest-tweets-$howmany_tweets.html";
		file_put_contents ($filename , $filecontents);
	}