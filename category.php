<?php get_header(); ?>

<?php
	//Get name of constituency
	$constituency = single_cat_title('', false);
	//Get identifier of constituency
	$constituency_id = get_cat_ID( $constituency );	
?>

<div id="container" class="clear">
<div id="content">

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
?>

<?php if ( $query->have_posts() ) : ?>



<div class="content-title">Our articles</div>

<?php

		// Start the Loop.
		while ( $query->have_posts() ) : $query->the_post(); ?>
		<div class="post">
		<div class="thumb">
		<?php
		the_post_thumbnail();
		?>
		</div>
		<div class="content-title"><?php the_title();?></div>
		<div class="post-content">
		<?php
		the_excerpt();
		?>
		</div>

		</div><!--.post-->
		<?php
		endwhile;

		wp_reset_query();

	endif;
?>
</div>
</div><!-- #content -->
</div><!-- #container -->


<?php
//get_sidebar( 'content' );
//get_sidebar();
get_footer();
