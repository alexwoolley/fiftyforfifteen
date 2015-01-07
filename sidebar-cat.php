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
			$Twitter_JavaScript_function = '<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?"http":"https";if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>'
		?>
		<?php switch($constituency) {
			case "Arfon": ?>
				<a class="twitter-timeline" 
					href="https://twitter.com/50for15/lists/arfon" 
					data-widget-id="552858885724598272"
					data-chrome="<?=$data_chrome?>"
					data-tweet-limit="<?=$data_tweet_limit?>"
					>
						Tweets from https://twitter.com/50for15/lists/arfon
				</a>
				<?= $Twitter_JavaScript_function ?>
				<?php break;
			case "Argyll and Bute": ?>
				<a class="twitter-timeline" 
					href="https://twitter.com/50for15/lists/argyll-and-bute" 
					data-widget-id="552859704314314753"
					data-chrome="<?=$data_chrome?>"
					data-tweet-limit="<?=$data_tweet_limit?>"
					>
						Tweets from https://twitter.com/50for15/lists/argyll-and-bute
					</a>
				<?= $Twitter_JavaScript_function ?>
				<?php break;
			case "Ashfield": ?>
				<a class="twitter-timeline" 
					href="https://twitter.com/50for15/lists/ashfield" 
					data-widget-id="552861620817629184"
					data-chrome="<?=$data_chrome?>"
					data-tweet-limit="<?=$data_tweet_limit?>"
					>
						Tweets from https://twitter.com/50for15/lists/ashfield
				</a>
				<?= $Twitter_JavaScript_function ?>
				<?php break;
			case "Birmingham Edgbaston": ?>
				<a class="twitter-timeline" 
					href="https://twitter.com/50for15/lists/birmingham-edgbaston" data-widget-id="552862243399147520"
					data-chrome="<?=$data_chrome?>"
					data-tweet-limit="<?=$data_tweet_limit?>"
					>
						Tweets from https://twitter.com/50for15/lists/birmingham-edgbaston
				</a>
				<?= $Twitter_JavaScript_function ?>
				<?php break;
			case "Bolton West": ?>
				<a class="twitter-timeline" 
					href="https://twitter.com/50for15/lists/bolton-west" 
					data-widget-id="552874847190417414"
					data-chrome="<?=$data_chrome?>"
					data-tweet-limit="<?=$data_tweet_limit?>"
					>
						Tweets from https://twitter.com/50for15/lists/bolton-west
					</a>
				<?= $Twitter_JavaScript_function ?>
				<?php break;
			case "Bradford East": ?>
				<a class="twitter-timeline" 
					href="https://twitter.com/50for15/lists/bradford-east" 
					data-widget-id="552869766642544640"
					data-chrome="<?=$data_chrome?>"
					data-tweet-limit="<?=$data_tweet_limit?>"
					>
						Tweets from https://twitter.com/50for15/lists/bradford-east
					</a>
					<?= $Twitter_JavaScript_function ?>
					<?php break;
			case "Brent Central":
			case "Brentford and Isleworth": ?>
				<a class="twitter-timeline" 
					href="https://twitter.com/50for15/lists/brentford-and-isleworth" data-widget-id="544516818560618496"
					data-chrome="<?=$data_chrome?>"
					data-tweet-limit="<?=$data_tweet_limit?>"
					>
						Tweets from https://twitter.com/50for15/lists/brentford-and-isleworth
				</a>
				<?= $Twitter_JavaScript_function ?>
				<?php break;
			case "Brighton Pavilion":
			case "Bristol West":
			case "Broxtowe": ?>
				<a class="twitter-timeline" 
					href="https://twitter.com/50for15/lists/broxtowe" 
					data-widget-id="552866138741547009"
					data-chrome="<?=$data_chrome?>"
					data-tweet-limit="<?=$data_tweet_limit?>"
					>
						Tweets from https://twitter.com/50for15/lists/broxtowe
				</a>
				<?= $Twitter_JavaScript_function ?>
				<?php break;		
			case "Camborne and Redruth": ?>
				<a class="twitter-timeline" 
					href="https://twitter.com/50for15/lists/camborne-and-redruth" data-widget-id="552867308574871552"
					data-chrome="<?=$data_chrome?>"
					data-tweet-limit="<?=$data_tweet_limit?>"
					>
						Tweets from https://twitter.com/50for15/lists/camborne-and-redruth
				</a>
				<?= $Twitter_JavaScript_function ?>
				<?php break;
			case "Cardiff North": ?>
				<a class="twitter-timeline"
					href="https://twitter.com/50for15/lists/cardiff-north" 
					data-widget-id="552872506005405696"
					data-chrome="<?=$data_chrome?>"
					data-tweet-limit="<?=$data_tweet_limit?>"
					>
						Tweets from https://twitter.com/50for15/lists/cardiff-north
				</a>
				<?= $Twitter_JavaScript_function ?>
				<?php break;
			case "Carlisle":
			case "Cleethorpes":
			case "Derby North":
			case "Dover and Deal": ?>
				<a class="twitter-timeline" 
					href="https://twitter.com/50for15/lists/dover-and-deal" 
					data-widget-id="552874575386914816"
					data-chrome="<?=$data_chrome?>"
					data-tweet-limit="<?=$data_tweet_limit?>"
					>
						Tweets from https://twitter.com/50for15/lists/dover-and-deal
				</a>
				<?= $Twitter_JavaScript_function ?>
				<?php break;
			case "Dundee East": ?>
				<a class="twitter-timeline" 
					href="https://twitter.com/50for15/lists/dundee-east" 
					data-widget-id="552873354097876993"
					data-chrome="<?=$data_chrome?>"
					data-tweet-limit="<?=$data_tweet_limit?>"
					>
						Tweets from https://twitter.com/50for15/lists/dundee-east
				</a>
				<?= $Twitter_JavaScript_function ?>
				<?php break;
			case "Edinburgh South": ?>
				<a class="twitter-timeline" 
					href="https://twitter.com/50for15/lists/edinburgh-south" 
					data-widget-id="552871978575863811"
					data-chrome="<?=$data_chrome?>"
					data-tweet-limit="<?=$data_tweet_limit?>"
					>
						Tweets from https://twitter.com/50for15/lists/edinburgh-south
				</a>
				<?= $Twitter_JavaScript_function ?>
				<?php break;
			case "Gedling":
			case "Great Grimsby":
			case "Great Yarmouth":
			case "Hampstead and Kilburn":
			case "Hendon":
			case "Hull North": ?>
				<a class="twitter-timeline" 
					href="https://twitter.com/50for15/lists/hull-north" 
					data-widget-id="552865767868624897"
					data-chrome="<?=$data_chrome?>"
					data-tweet-limit="<?=$data_tweet_limit?>"
					>
						Tweets from https://twitter.com/50for15/lists/hull-north
				</a>
				<?= $Twitter_JavaScript_function ?>
				<?php break;
			case "Lancaster and Fleetwood":
			case "Lincoln": ?>
				<a class="twitter-timeline" 
					href="https://twitter.com/50for15/lists/lincoln" 
					data-widget-id="552871654314217472"
					data-chrome="<?=$data_chrome?>"
					data-tweet-limit="<?=$data_tweet_limit?>"
					>
						Tweets from https://twitter.com/50for15/lists/lincoln
				</a>
				<?= $Twitter_JavaScript_function ?>
				<?php break;
			case "Mid Dorset and North Poole":
			case "Middlesbrough South and East Cleveland":
			case "Morley and Outwood": ?>
				<a class="twitter-timeline" 
					href="https://twitter.com/50for15/lists/morley-and-outwood" 
					data-widget-id="552866696642699264"
					data-chrome="<?=$data_chrome?>"
					data-tweet-limit="<?=$data_tweet_limit?>"
					>
						Tweets from https://twitter.com/50for15/lists/morley-and-outwood
				</a>
				<?= $Twitter_JavaScript_function ?>
				<?php break;
			case "Newton Abbot": ?>
				<a class="twitter-timeline" 
					href="https://twitter.com/50for15/lists/newton-abbot" 
					data-widget-id="552867050755203073"
					data-chrome="<?=$data_chrome?>"
					data-tweet-limit="<?=$data_tweet_limit?>"
					>
						Tweets from https://twitter.com/50for15/lists/newton-abbot
				</a>
				<?= $Twitter_JavaScript_function ?>
				<?php break;
			case "North Warwickshire":
			case "Norwich South": ?>
				<a class="twitter-timeline" 
					href="https://twitter.com/50for15/lists/norwich-south" 
					data-widget-id="552870104556650496"
					data-chrome="<?=$data_chrome?>"
					data-tweet-limit="<?=$data_tweet_limit?>"
					>
						Tweets from https://twitter.com/50for15/lists/norwich-south
				</a>
				<?= $Twitter_JavaScript_function ?>
				<?php break;
			case "Oxford West and Abingdon":
			case "Plymouth Sutton and Devonport": ?>
				<a class="twitter-timeline" 
					href="https://twitter.com/50for15/lists/plym-sutton-devonport" data-widget-id="552866431835320322"
					data-chrome="<?=$data_chrome?>"
					data-tweet-limit="<?=$data_tweet_limit?>"
					>
						Tweets from https://twitter.com/50for15/lists/plym-sutton-devonport
				</a>
				<?= $Twitter_JavaScript_function ?>
				<?php break;
			case "Rochdale": ?>
				<a class="twitter-timeline" 
					href="https://twitter.com/50for15/lists/rochdale" 
					data-widget-id="552872251599888385"
					data-chrome="<?=$data_chrome?>"
					data-tweet-limit="<?=$data_tweet_limit?>"
					>
						Tweets from https://twitter.com/50for15/lists/rochdale
				</a>
				<?= $Twitter_JavaScript_function ?>
				<?php break;
			case "Sheffield Central":
			case "Solihull": ?>
				<a class="twitter-timeline" 
					href="https://twitter.com/50for15/lists/solihull" 
					data-widget-id="552874019717128192"
					data-chrome="<?=$data_chrome?>"
					data-tweet-limit="<?=$data_tweet_limit?>"
					>
						Tweets from https://twitter.com/50for15/lists/solihull
				</a>
				<?= $Twitter_JavaScript_function ?>
				<?php break;
			case "Somerset North East": ?>
				<a class="twitter-timeline" 
					href="https://twitter.com/50for15/lists/somerset-north-east" 
					data-widget-id="552870786575654913"
					data-chrome="<?=$data_chrome?>"
					data-tweet-limit="<?=$data_tweet_limit?>"
					>
						Tweets from https://twitter.com/50for15/lists/somerset-north-east
				</a>
				<?= $Twitter_JavaScript_function ?>
				<?php break;
			case "South Thanet": ?>
				<a class="twitter-timeline" 
					href="https://twitter.com/50for15/lists/south-thanet" 
					data-widget-id="552870538654535680"
					data-chrome="<?=$data_chrome?>"
					data-tweet-limit="<?=$data_tweet_limit?>"
					>
						Tweets from https://twitter.com/50for15/lists/south-thanet
				</a>
				<?= $Twitter_JavaScript_function ?>
				<?php break;
			case "Southampton Itchen": ?>
				<a class="twitter-timeline" 
					href="https://twitter.com/50for15/lists/southampton-itchen" 
					data-widget-id="552867864789934080"
					data-chrome="<?=$data_chrome?>"
					data-tweet-limit="<?=$data_tweet_limit?>"
					>
						Tweets from https://twitter.com/50for15/lists/southampton-itchen
				</a>
				<?= $Twitter_JavaScript_function ?>
				<?php break;
			case "Stockton South":
			case "Stroud": ?>
				<a class="twitter-timeline" 
					href="https://twitter.com/50for15/lists/stroud" 
					data-widget-id="552873093648375809"
					data-chrome="<?=$data_chrome?>"
					data-tweet-limit="<?=$data_tweet_limit?>"
					>
						Tweets from https://twitter.com/50for15/lists/stroud
				</a>
				<?= $Twitter_JavaScript_function ?>
				<?php break;
			case "Sutton and Cheam":
			case "Swansea West": ?>
				<a class="twitter-timeline" 
					href="https://twitter.com/50for15/lists/swansea-west" 
					data-widget-id="552874313175805952"
					data-chrome="<?=$data_chrome?>"
					data-tweet-limit="<?=$data_tweet_limit?>"
					>
						Tweets from https://twitter.com/50for15/lists/swansea-west
				</a>
				<?= $Twitter_JavaScript_function ?>
				<?php break;
			case "Thurrock":
			case "Walsall North":
			case "Watford": ?>
				<a class="twitter-timeline" 
					href="https://twitter.com/50for15/lists/watford" 
					data-widget-id="552867584090329088"
					data-chrome="<?=$data_chrome?>"
					data-tweet-limit="<?=$data_tweet_limit?>"
					>
						Tweets from https://twitter.com/50for15/lists/watford
				</a>
				<?= $Twitter_JavaScript_function ?>
				<?php break;
			case "Wells": ?>
				<a class="twitter-timeline" 
					href="https://twitter.com/50for15/lists/wells" 
					data-widget-id="552871050883903488"
					data-chrome="<?=$data_chrome?>"
					data-tweet-limit="<?=$data_tweet_limit?>"
					>
						Tweets from https://twitter.com/50for15/lists/wells
				</a>
				<?= $Twitter_JavaScript_function ?>
				<?php break;
			case "Wirral South": ?>
				<a class="twitter-timeline" 
					href="https://twitter.com/50for15/lists/wirral-south" 
					data-widget-id="552871414823665664"
					>
						Tweets from https://twitter.com/50for15/lists/wirral-south
				</a>
				<?= $Twitter_JavaScript_function ?>
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
				<?= $Twitter_JavaScript_function ?>
				<?php break;
		} ?>
		<script type="text/javascript">
			jQuery("iframe").contents().find(".timeline").css("background",'rgba(5,5,5,5)');
		</script>


		<!-- Look at this in more detail for YouTube channel embedding http://www.joaopimentel.pt/Home/works/embed-your-youtube-channel-on-your-google-site -->
	<?php endif; ?>
</div>