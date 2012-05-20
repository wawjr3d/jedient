<?php
	$feed = "http://socialstatuspgh.com/site/feed/";
	$entry_count = isset($howmany_blog_entries) ? $howmany_blog_entries : 5;

	$xml = simplexml_load_file($feed, null, LIBXML_NOENT);

	$items = $xml->xpath("//channel/item[position() <= $entry_count]");
	
	if (count($items)) {
		if ($entry_count == 1) {
			$item = $items[0];
			$title = $item->title;
			$link = $item->link;
			
			echo "<a href='$link' target='_blank'>$title</a>";
		} else {
			echo "<ul>";
			foreach ($items as $item) {
			    $title = $item->title;
			    $link = $item->link;
			    
				echo "<li><a href='$link' target='_blank'>$title</a></li>";
			}
			echo "</ul>";
		}
	}