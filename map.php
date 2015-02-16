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
						<img src="http://localhost/wordpress/50for15/wp-content/themes/fiftyforfifteen/united_kingdom_map.png" style="position: relative; top: 0; left: 0;"/>
						<img src="http://localhost/wordpress/50for15/wp-content/themes/fiftyforfifteen/blue_circle.png" style="position: absolute; top: 450px; left: 320px;" width="10px" height="10px;" class="constituency-circles" id="carlisle"/>
						<img src="http://localhost/wordpress/50for15/wp-content/themes/fiftyforfifteen/blue_circle.png" style="position: absolute; top: 550px; left: 450px;" width="10px" height="10px;" class="constituency-circles" id="some-constituency"/>
						<img src="http://localhost/wordpress/50for15/wp-content/themes/fiftyforfifteen/blue_circle.png" style="position: absolute; top: 690px; left: 450px;" width="10px" height="10px;" class="constituency-circles" id="some-other-constituency"/>
						<div style="position: absolute; top: 500px; left: 0; max-width: 200px;">
							<div style="display: none;" class="constituency-text" id="carlisle-text">
								<h4>Carlisle</h4>
								<p>Carlisle is a cool constituency. sadlkfjadslkj</p>
							</div>
							<div style="display: none;" class="constituency-text" id="some-constituency-text">
								<h4>Some constituency</h4>
								<p>Some paragraph</p>
							</div>
							<div style="display: none;" class="constituency-text" id="some-other-constituency-text">
								<h4>Some other constituency</h4>
								<p>Some other paragraph</p>
							</div>
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

$(".constituency-circles").click(function(){

	//Make array of all constituencies
	var allConstituencies = []
	$('.constituency-circles').each(function(){
	  allConstituencies.push( "#" + $(this).attr('id') );
	});

	//Find constituency with correct id
	var thisConstituency = "#" + $(this).attr('id');

	//Hide all constituency texts
	$(allConstituencies).each(function(){
		$(this + "-text").hide();
	});

	//Show constituency text for constituency that's been clicked on
	$(thisConstituency + "-text").show();
});

</script> 