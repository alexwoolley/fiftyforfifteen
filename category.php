<?php get_header(); ?>

<?php
	//Get name of constituency
	$constituency = single_cat_title('', false);
	//Get identifier of constituency
	$constituency_id = get_cat_ID( $constituency );	
?>

<!--<div id="container" class="clear">-->
<!--<div id="content">-->

<div class="content-title">
<?php printf('%s', $constituency); ?>
</div>

<div id="loop" class="list clear">

	<?php	
		//Get constituency profile
		$query = new WP_Query(array( 'category__and' => array( $constituency_id, 451 ) ));
		if ($query->have_posts()) :
			while ( $query->have_posts() ) : $query->the_post(); ?>
				<div class="post-content post">
					<?php the_content(); ?>
				</div>
			<?php endwhile;
			wp_reset_query(); ?>
			<div class="content-title">
				Our articles
			</div>
		<?php endif;
	?>

	<?php
		$query = new WP_Query("cat=$constituency_id,-451");

	if ( $query->have_posts() ) : ?>


	<?php
			// Start the Loop.
			while ( $query->have_posts() ) : $query->the_post(); ?>
			<div class="post">
				<?php if (has_post_thumbnail()): ?>
				<a href="<?php the_permalink() ?>" class="thumb"><?php the_post_thumbnail('thumbnail', array(
						'alt' => trim(strip_tags($post->post_title)),
						'title' => trim(strip_tags($post->post_title)),
					)); ?></a>
				<?php endif; ?>
				<h2>
					<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
				</h2>
				<div class="post-meta"><?php
					printf(__('by <span class="post-author"><a href="%s" title="Posts by %s">%s</a></span> on <span class="post-date">%s</span>', 'sight'),
						get_author_posts_url(get_the_author_meta('ID')),
						get_the_author(),
						get_the_author(),
						get_the_time('M j, Y')
					); ?>
					<?php edit_post_link(__('Edit entry', 'sight'), '<em>&bull; </em>'); ?>
				</div>
				<div class="post-content">
					<?php if (function_exists('smart_excerpt')) smart_excerpt(get_the_excerpt(), 55); ?>
				</div><!-- .post-content-->
			</div><!--.post-->
			<?php
			endwhile;

			wp_reset_query();

		endif;
	?>
</div><!-- #loop -->

<!--</div> #content -->
<!--</div> #container -->

<?php get_footer(); ?>
