<?php
		//Following comes from http://www.problogdesign.com/wordpress/authenticate-your-twitter-api-calls-before-march/
		//See also https://gist.github.com/michael-martin/4578005
		
		$numTweets      = 3;                // Number of tweets to display.
		$name           = 'problogdesign';  // Username to display tweets from.
		$excludeReplies = true;             // Leave out @replies
		$transName      = 'list-tweets';    // Name of value in database.
		$cacheTime      = 5;                // Time in minutes between updates.
		 
		$backupName = $transName . '-backup';
		 
		// Do we already have saved tweet data? If not, lets get it.
		if(false === ($tweets = get_transient($transName) ) ) :	
		 
		  // Get the tweets from Twitter.
		  include '/var/www/html/wordpress/wp-content/themes/fiftyforfifteen/twitteroauth-master/twitteroauth/twitteroauth.php';
		 
		  $connection = new TwitterOAuth(
		    'xUALPnCCYA4f4x7TZEtPoOjR7',   // Consumer key
		    'v1wmWeni6ASbrqvMivcAePuv7E4z5YjTlSSGKnqnD2pvsyca8i',   // Consumer secret
		    '1264793912-XC8bUrOWfTcIiuVoWnw21YXsgDacZ4itqZvM9Tl',   // Access token
		    '7DaWbcrBMM5WauBYmW4PT4eWqm9kysjnWQCTL5xNHiGnb'    // Access token secret
		  );

		// If excluding replies, we need to fetch more than requested as the
		// total is fetched first, and then replies removed.
		$totalToFetch = ($excludeReplies) ? max(50, $numTweets * 3) : $numTweets;
		 
		$fetchedTweets = $connection->get(
		  'statuses/user_timeline',
		  array(
		    'screen_name'     => $name,
		    'count'           => $totalToFetch,
		    'exclude_replies' => $excludeReplies
		  )
		);
		// Did the fetch fail?
		if($connection->http_code != 200) :
		  $tweets = get_option($backupName); // False if there has never been data saved.
		else :
		  // Fetch succeeded.
		  // Now update the array to store just what we need.
		  // (Done here instead of PHP doing this for every page load)
		  $limitToDisplay = min($numTweets, count($fetchedTweets));
		 
		  for($i = 0; $i < $limitToDisplay; $i++) :
      $tweet = $fetchedTweets[$i];
    
      // Core info.
      $name = $tweet->user->name;
      $permalink = 'http://twitter.com/'. $name .'/status/'. $tweet->id_str;
		 
		    /* Alternative image sizes method: http://dev.twitter.com/doc/get/users/profile_image/:screen_name */
		    $image = $tweet->user->profile_image_url;
		 
		    // Message. Convert links to real links.
		    $pattern = '/http:(\S)+/';
		    $replace = '<a href="${0}" target="_blank" rel="nofollow">${0}</a>';
		    $text = preg_replace($pattern, $replace, $tweet->text);
		 
		    // Need to get time in Unix format.
		    $time = $tweet->created_at;
		    $time = date_parse($time);
		    $uTime = mktime($time['hour'], $time['minute'], $time['second'], $time['month'], $time['day'], $time['year']);
		 
		    // Now make the new array.
		    $tweets[] = array(
		            'text' => $text,
		            'name' => $name,
		            'permalink' => $permalink,
		            'image' => $image,
		            'time' => $uTime
		            );
		  endfor;

			// Save our new transient, and update the backup.
    set_transient($transName, $tweets, 60 * $cacheTime);
    update_option($backupName, $tweets);
  endif;
endif;

	// Now display the tweets.
?>
<ul id="tweets">  
  <?php foreach($tweets as $t) : ?>
    <li>
      <p>
        <?php echo $t['text']; ?>
        <span class="tweet-time"><?php echo human_time_diff($t['time'], current_time('timestamp')); ?> ago</span>
      </p>
    </li>
  <?php endforeach; ?>
</ul>