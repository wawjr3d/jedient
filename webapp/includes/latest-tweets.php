<?php
    require_once(dirname(__FILE__) . "/../../config.php");
    require_once(dirname(__FILE__) . "/../../lib/Twitter.php");

    use \TijsVerkoyen\Twitter\Twitter;

    $twitter = new Twitter(TWITTER_API_KEY, TWITTER_API_SECRET);
    $twitter->setOAuthToken(OAUTH_TOKEN);
    $twitter->setOAuthTokenSecret(OAUTH_TOKEN_SECRET);

    $tweet_count = isset($howmany_tweets) ? $howmany_tweets : 1;

    $searchTerm = "jedipgh";
    $result_type = "recent";
    $count = 20;
    $include_entities = true;

    $response = $twitter->searchTweets($searchTerm, null, null, null, $result_type, $count, null, null, null, $include_entities);

    $tweets = $response["statuses"];
    $filteredTweets = array();
    $i = 0;

    if (empty($tweets)) {
        return;
    }

    // filter out tweets not from #jedisomethingelse
    foreach($tweets as $tweet) {
        if ($i >= $tweet_count) { break; }

        if (strtolower($tweet["user"]["screen_name"]) == strtolower($searchTerm)) {
            array_push($filteredTweets, $tweet);
            $i++;
        }
    }

    $tweets = $filteredTweets;

    if (count($tweets)) {
        if ($tweet_count == 1) {
            $tweet = $tweets[0];
            $tweet_text = $tweet["text"];

            $tweet_link = "http://www.twitter.com/jedipgh";

            echo "<a href='$tweet_link' target='_blank'>$tweet_text</a>";
        } else {
            echo "<ul>";
            foreach($tweets as $tweet) {
                $tweet_text = $tweet["text"];

                $tweet_link = "http://www.twitter.com/jedipgh";

                echo "<li><a href='$tweet_link' target='_blank'>$tweet_text</a></li>";
            }
            echo "</ul>";
        }
    }
