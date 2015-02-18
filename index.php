<?php get_header(); ?>

<!-- The following is taken mostly verbatim from Sight theme's index.php -->

<div class="content-title">
	<?php _e('Latest entries', 'sight'); ?>
</div>

<?php
global $exl_posts;
$args = array('paged' => $paged);
if (!empty($exl_posts)) $args['post__not_in'] = $exl_posts;
query_posts($args);
?>

<?php
	//Begin loop that excludes constituency profiles
	//See http://wordpress.stackexchange.com/questions/120407/how-to-fix-pagination-for-custom-loops
	
	// Define custom query parameters
	$custom_query_args = array('cat' => '-451');
	
	// Get current page and append to custom query parameters array
	$custom_query_args['paged'] = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;

	// Instantiate custom query
	$custom_query = new WP_Query( $custom_query_args );

	// Pagination fix
	$temp_query = $wp_query;
	$wp_query   = NULL;
	$wp_query   = $custom_query;


// Output custom query loop
if ( $custom_query->have_posts() ) : ?>


	<div id="loop" class="<?php echo isset($_COOKIE['mode']) && $_COOKIE['mode'] == 'grid' ? 'grid' : 'list'; ?> clear">

	<?php while ( $custom_query->have_posts() ) : $custom_query->the_post(); ?>

		<div <?php post_class('post clear'); ?> id="post_<?php the_ID(); ?>">
			<?php if (has_post_thumbnail()): ?>
			<a href="<?php the_permalink() ?>" class="thumb"><?php the_post_thumbnail('thumbnail', array(
					'alt' => trim(strip_tags($post->post_title)),
					'title' => trim(strip_tags($post->post_title)),
				)); ?></a>
			<?php endif; ?>

			<div class="post-category"><?php the_category(' / '); ?></div>
			<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>

			<div class="post-meta"><?php
				printf(__('by <span class="post-author"><a href="%s" title="Posts by %s">%s</a></span> on <span class="post-date">%s</span>', 'sight'),
					get_author_posts_url(get_the_author_meta('ID')),
					get_the_author(),
					get_the_author(),
					get_the_time('M j, Y')
				); ?>
				<?php if (get_comments_number() != 0): //Only show the comments link if there are comments ?>
					<em>&bull; </em><?php comments_popup_link(__('No Comments', 'sight'), __('1 Comment', 'sight'), __('% Comments', 'sight'), '', __('Comments Closed', 'sight')); ?>
				<?php endif; ?>
				<?php edit_post_link(__('Edit entry', 'sight'), '<em>&bull; </em>'); ?>
			</div>
			<div class="post-content"><?php if (function_exists('smart_excerpt')) smart_excerpt(get_the_excerpt(), 55); ?></div>
		</div>

	<?php endwhile; ?>

	</div>

	<?php 
		// Reset postdata
		wp_reset_postdata(); 
	?>

<?php endif; ?>

<!-- The following is slightly modified from the Sight theme's pagination.php -->
<?php if (get_option('paging_mode') == 'default'): ?>
	<div class="pagination">
		<?php previous_posts_link(__('Newer', 'sight')); ?>
		<?php
			// Custom query loop pagination
			next_posts_link(__('Older', $custom_query->max_num_pages)); 
		?>
		<?php if (function_exists('wp_pagenavi')) wp_pagenavi(); ?>
	</div>
	<?php else: ?>
	<div id="pagination"><?php next_posts_link(__('LOAD MORE', 'sight')); ?></div>
<?php endif; ?>

<?php 
	// Reset main query object
	$wp_query = NULL;
	$wp_query = $temp_query;
?>

<?php get_footer(); ?>