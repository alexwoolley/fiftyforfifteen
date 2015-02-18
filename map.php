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
						<a href="http://localhost/wordpress/50for15/category/carlisle/" target="_blank">
							<img src="http://localhost/wordpress/50for15/wp-content/themes/fiftyforfifteen/blue_circle.png" style="bottom: 450px; right: 320px;" class="constituency-circles" id="carlisle"/>
						</a>
						<img src="http://localhost/wordpress/50for15/wp-content/themes/fiftyforfifteen/blue_circle.png" style="bottom: 550px; right: 450px;" class="constituency-circles" id="some-constituency"/>
						<img src="http://localhost/wordpress/50for15/wp-content/themes/fiftyforfifteen/blue_circle.png" style="bottom: 690px; right: 450px;" class="constituency-circles" id="some-other-constituency"/>
						<div class="constituency-text" id="carlisle-text">
							<p>
								<strong>Carlisle</strong><br>
								Conservative majority: 853 votes<br>
								Labour target<br>
								<em>Click to read more</em>
							</p>
						</div>
						<div class="constituency-text" id="some-constituency-text">
							<h4>Some constituency</h4>
							<p>Some paragraph</p>
						</div>
						<div class="constituency-text" id="some-other-constituency-text">
							<h4>Some other constituency</h4>
							<p>Some other paragraph</p>
						</div>
					</div>
					


				</div>
				<div class="post-footer"><?php the_tags('<strong>'.__('Tags:', 'sight').' </strong>', ', '); ?></div>
			</div>
		</div>

		<?php endwhile; ?>
	<?php endif; ?>

<?php comments_template(); ?>
<?php get_footer(); ?>


<!-- jQuery -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>

$(".constituency-circles").hover(function(){

 	//Find constituency with correct id
	var thisConstituency = "#" + $(this).attr('id');

	//Find position of thisConstituency
	var thisConstituencyBottom = parseInt($(thisConstituency).css("bottom").replace(/[^-\d\.]/g, ''));
	var thisConstituencyRight = parseInt($(thisConstituency).css("right").replace(/[^-\d\.]/g, ''));

	//Define thisConstituencyText variable
	var thisConstituencyText = thisConstituency + "-text";

	//Define thisConstituencyText position
	var thisConstituencyTextBottom = thisConstituencyBottom + 40 + "px";
	var thisConstituencyTextRight = thisConstituencyRight + 20 + "px";

	//Add CSS to thisConstituency text so that it displays just above the circle
	$(thisConstituencyText).css("bottom", thisConstituencyTextBottom);
	$(thisConstituencyText).css("right", thisConstituencyTextRight);

	//Show constituency text for constituency that's been clicked on
	$(thisConstituencyText).show();	
	}, function () {
		//Make array of all constituencies
		var allConstituencies = []
		$('.constituency-circles').each(function(){
		 	allConstituencies.push( "#" + $(this).attr('id') );
		});
		//Hide all constituency texts
		$(allConstituencies).each(function(){
			$(this + "-text").hide();
		});

	}
);

</script>