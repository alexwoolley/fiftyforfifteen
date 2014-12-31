<?php $constituency = single_cat_title('', false); ?>
<div class="sidebar">
	<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('cat')): ?>
		<div id="sidebar-cat-top">
			<button type="button">
				Want a different constituency?
			</button>
		</div>
		<?php the_widget( 'WP_Widget_Categories'); ?>
		<script type="text/javascript">
			jQuery('.widget_categories').hide();
			jQuery('#sidebar-cat-top').click(function(){
				jQuery('.widget_categories').toggle("slow")
			});
		</script>
		<!-- Twitter lists -->
		<?php
			//Variables for Twitter lists
			$data_chrome = "nofooter noborders transparent";
			$data_tweet_limit = "10";
		?>
		<?php switch($constituency) {
			case "brentford-and-isleworth": ?>
				<a class="twitter-timeline" 
					href="https://twitter.com/50for15/lists/brentford-and-isleworth" data-widget-id="544516818560618496"
					data-chrome="<?=$data_chrome?>"
					data-tweet-limit="<?=$data_tweet_limit?>"
					>
						Tweets from https://twitter.com/50for15/lists/brentford-and-isleworth
				</a>
				<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
				</script>
				<?php break; ?>
			<!-- Default case is list of 50for15 tweets -->
			<?php default: ?>
				<a class="twitter-timeline" 
					href="https://twitter.com/50for15" 
					data-widget-id="482882872806612992"
					data-chrome="<?=$data_chrome?>"
					data-tweet-limit="<?=$data_tweet_limit?>"
					>
						Tweets by @50for15
				</a>
				<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
				</script>
				<?php break;
		} ?>


		<!-- Look at this in more detail for YouTube channel embedding http://www.joaopimentel.pt/Home/works/embed-your-youtube-channel-on-your-google-site -->
	<?php endif; ?>
</div>