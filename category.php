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
		$query = new WP_Query(array( 'category__and' => array( $constituency_id, 200 ) ));
		if ($query->have_posts()) :
			while ( $query->have_posts() ) : $query->the_post(); ?>
				<div class="post-content post">
					<?php the_content(); ?>
				</div>
			<?php endwhile;
			wp_reset_query();
		endif;
	?>

	<?php
		$query = new WP_Query("cat=$constituency_id,-200");

	if ( $query->have_posts() ) : ?>

	<div class="content-title">
		Our articles
	</div>

	<?php
			// Start the Loop.
			while ( $query->have_posts() ) : $query->the_post(); ?>
			<div class="post">
				<div class="thumb">
					<?php the_post_thumbnail(); ?>
				</div>
				<h2>
					<?php the_title();?>
				</h2>
				<div class="post-content">
					<?php the_excerpt(); ?>
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


<?php
//include ('sidebar-cat.php');
get_sidebar( 'cat' );
//get_sidebar();
get_footer();
