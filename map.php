<?php

/*
Template Name: Map
*/

?>



<?php get_header(); ?>

	<?php if (have_posts()): ?>
		<?php while (have_posts()): the_post(); ?>

		<div class="entry">
			<div <?php post_class('single clear'); ?> id="post_<?php the_ID(); ?>">
				<div class="post-meta">
					<h1><?php the_title(); ?></h1>
					<?php printf(__('by <span class="post-author"><a href="%s" title="Posts by %s">%s</a></span> on <span class="post-date">%s</span> &bull; <span>%s</span>', 'sight'),
						get_author_posts_url(get_the_author_meta('ID')),
						get_the_author(),
						get_the_author(),
						get_the_time('M j, Y'),
						get_the_time()
					); ?>
					<?php edit_post_link( __( 'Edit entry', 'sight'), '&bull; '); ?>
					<?php if (comments_open()): ?>
						<a href="#comments" class="post-comms"><?php comments_number(__('No Comments', 'sight'), __('1 Comment', 'sight'), __('% Comments', 'sight'), '', __('Comments Closed', 'sight') ); ?></a>
					<?php endif; ?>
				</div>
				<div class="post-content">


					<div style="position: relative; left: 0; top: 0;">
						<img src="http://localhost/wordpress/50for15/wp-content/themes/fiftyforfifteen/GBOverviewPlus.jpeg" style="position: relative; bottom: 0; left: 0;"/>
						<img src="http://localhost/wordpress/50for15/wp-content/themes/fiftyforfifteen/plaid_circle.png" style="bottom: 315px; right: 350px;" class="constituency-circles" id="arfon"/>
						<img src="http://localhost/wordpress/50for15/wp-content/themes/fiftyforfifteen/libdem_circle.png" style="bottom: 590px; right: 400px;" class="constituency-circles" id="argyll-and-bute"/>
						<img src="http://localhost/wordpress/50for15/wp-content/themes/fiftyforfifteen/labour_circle.png" style="bottom: 320px; right: 190px;" class="constituency-circles" id="ashfield"/>
						<img src="http://localhost/wordpress/50for15/wp-content/themes/fiftyforfifteen/labour_circle.png" style="bottom: 250px; right: 220px;" class="constituency-circles" id="birmingham-edgbaston"/>
						<img src="http://localhost/wordpress/50for15/wp-content/themes/fiftyforfifteen/labour_circle.png" style="bottom: 350px; right: 250px;" class="constituency-circles" id="bolton-west"/>
						<img src="http://localhost/wordpress/50for15/wp-content/themes/fiftyforfifteen/libdem_circle.png" style="bottom: 370px; right: 220px;" class="constituency-circles" id="bradford-east"/>
						<img src="http://localhost/wordpress/50for15/wp-content/themes/fiftyforfifteen/libdem_circle.png" style="bottom: 168px; right: 130px;" class="constituency-circles" id="brent-central"/>
						<img src="http://localhost/wordpress/50for15/wp-content/themes/fiftyforfifteen/conservative_circle.png" style="bottom: 158px; right: 130px;" class="constituency-circles" id="brentford-and-isleworth"/>
						<img src="http://localhost/wordpress/50for15/wp-content/themes/fiftyforfifteen/green_circle.png" style="bottom: 100px; right: 125px;" class="constituency-circles" id="brighton-and-pavilion"/>
						<img src="http://localhost/wordpress/50for15/wp-content/themes/fiftyforfifteen/libdem_circle.png" style="bottom: 155px; right: 265px;" class="constituency-circles" id="bristol-west"/>
						<img src="http://localhost/wordpress/50for15/wp-content/themes/fiftyforfifteen/conservative_circle.png" style="bottom: 295px; right: 185px;" class="constituency-circles" id="broxtowe"/>


						<img src="http://localhost/wordpress/50for15/wp-content/themes/fiftyforfifteen/conservative_circle.png" style="bottom: 470px; right: 275px;" class="constituency-circles" id="carlisle"/>


						<!-- CONSTITUENCY TEXTS -->
						<div class="constituency-text" id="arfon-text">
							<p>
								<strong>Arfon</strong><br>
								<span class="plaid">Plaid Cymru</span> majority: 1,455 votes<br>
								<span class="labour">Labour</span> target<br>
								<em>Click to read more</em>
							</p>
						</div>
						<div class="constituency-text" id="argyll-and-bute-text">
							<p>
								<strong>Argyll and Bute</strong><br>
								<span class="libdem">Lib Dem</span> majority: 3,431 votes<br>
								<span class="conservative">Conservative</span> target<br>
								<span class="labour">Labour</span> target<br>
								<span class="snp">SNP</span> target<br>
								<em>Click to read more</em>
							</p>
						</div>
						<div class="constituency-text" id="ashfield-text">
							<p>
								<strong>Ashfield</strong><br>
								<span class="labour">Labour</span> majority: 192 votes<br>
								<span class="libdem">Lib Dem</span> target<br>
								<em>Click to read more</em>
							</p>
						</div>
						<div class="constituency-text" id="birmingham-edgbaston-text">
							<p>
								<strong>Birmingham Edgbaston</strong><br>
								<span class="labour">Labour</span> majority: 1, 274 votes<br>
								<span class="conservative">Conservative</span> target<br>
								<em>Click to read more</em>
							</p>
						</div>
						<div class="constituency-text" id="bolton-west-text">
							<p>
								<strong>Bolton West</strong><br>
								<span class="labour">Labour</span> majority: 92 votes<br>
								<span class="conservative">Conservative</span> target<br>
								<em>Click to read more</em>
							</p>
						</div>
						<div class="constituency-text" id="bradford-east-text">
							<p>
								<strong>Bradford East</strong><br>
								<span class="libdem">Liberal Democrat</span> majority: 365 votes<br>
								<span class="labour">Labour</span> target<br>
								<em>Click to read more</em>
							</p>
						</div>
						<div class="constituency-text" id="brent-central-text">
							<p>
								<strong>Brent Central</strong><br>
								<span class="libdem">Liberal Democrat</span> majority: 1,345 votes<br>
								<span class="labour">Labour</span> target<br>
								<em>Click to read more</em>
							</p>
						</div>
						<div class="constituency-text" id="brentford-and-isleworth-text">
							<p>
								<strong>Brentford and Isleworth</strong><br>
								<span class="conservative">Conservative</span> majority: 853 votes<br>
								<span class="labour">Labour</span> target<br>
								<em>Click to read more</em>
							</p>
						</div>
						<div class="constituency-text" id="brighton-and-pavilion-text">
							<p>
								<strong>Brighton Pavilion</strong><br>
								<span class="green">Green</span> majority: 1,252 votes<br>
								<span class="labour">Labour</span> target<br>
								<em>Click to read more</em>
							</p>
						</div>
						<div class="constituency-text" id="bristol-west-text">
							<p>
								<strong>Bristol West</strong><br>
								<span class="libdem">Liberal Democrat</span> majority: 11, 366 votes<br>
								<span class="labour">Labour</span> target<br>
								<em>Click to read more</em>
							</p>
						</div>
						<div class="constituency-text" id="broxtowe-text">
							<p>
								<strong>Broxtowe</strong><br>
								<span class="conservative">Conservative</span> majority: 389 votes<br>
								<span class="labour">Labour</span> target<br>
								<em>Click to read more</em>
							</p>
						</div>


						<div class="constituency-text" id="carlisle-text">
							<p>
								<strong>Carlisle</strong><br>
								<span class="conservative">Conservative</span> majority: 1, 958 votes<br>
								<span class="labour">Labour</span> target<br>
								<span class="conservative">Conservative</span> target<br>
								<span class="green">Green</span> target<br>
								<em>Click to read more</em>
							</p>
						</div>
					</div>
								<span class="conservative">Conservative</span> target<br>
								<span class="libdem">Lib Dem</span> target<br>
								<span class="ukip">UKIP</span> target<br>
								<span class="green">Green</span> target<br>
								<span class="snp">SNP</span> target<br>
								<span class="plaid">Plaid Cymru</span> target<br>
					<script type="text/javascript" src="<?= get_site_url() . "/wp-content/themes/fiftyforfifteen" ;?>/map.js"></script>
					<script type="text/javascript">
					<!--
						map();
							//--></script>

				</div>
				<div class="post-footer"><?php the_tags('<strong>'.__('Tags:', 'sight').' </strong>', ', '); ?></div>
			</div>
		</div>

		<?php endwhile; ?>
	<?php endif; ?>

<?php comments_template(); ?>
<?php get_footer(); ?>



<script type="text/javascript">

// jQuery(".constituency-circles").hover(function(){

//  	//Find constituency with correct id
// 	var thisConstituency = "#" + jQuery(this).attr('id');

// 	//Find position of thisConstituency
// 	var thisConstituencyBottom = parseInt(jQuery(thisConstituency).css("bottom").replace(/[^-\d\.]/g, ''));
// 	var thisConstituencyRight = parseInt(jQuery(thisConstituency).css("right").replace(/[^-\d\.]/g, ''));

// 	//Define thisConstituencyText variable
// 	var thisConstituencyText = thisConstituency + "-text";

// 	//Define thisConstituencyText position
// 	var thisConstituencyTextBottom = thisConstituencyBottom + 40 + "px";
// 	var thisConstituencyTextRight = thisConstituencyRight + 20 + "px";

// 	//Add CSS to thisConstituency text so that it displays just above the circle
// 	jQuery(thisConstituencyText).css("bottom", thisConstituencyTextBottom);
// 	jQuery(thisConstituencyText).css("right", thisConstituencyTextRight);

// 	//Show constituency text for constituency that's been clicked on
// 	jQuery(thisConstituencyText).show();	
// 	}, function () {
// 		//Make array of all constituencies
// 		var allConstituencies = []
// 		jQuery('.constituency-circles').each(function(){
// 		 	allConstituencies.push( "#" + jQuery(this).attr('id') );
// 		});
// 		//Hide all constituency texts
// 		jQuery(allConstituencies).each(function(){
// 			jQuery(this + "-text").hide();
// 		});

// 	}
// );

// </script>
