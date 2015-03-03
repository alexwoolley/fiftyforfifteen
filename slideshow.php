<?php
$args = array(
	'meta_key' => 'sgt_slide',
	'meta_value' => 'on',
	'numberposts' => -1,
);
$slides = get_posts($args);

global $exl_posts;
if (!empty($slides)):
?>

<div class="slideshow">
	<div id="slideshow">

	<?php foreach($slides as $post):
		setup_postdata($post);
		$exl_posts[] = $post->ID;
	?>

		<div class="slide clear">
			<div class="post">
				<?php 			
					if (has_post_thumbnail()) echo '<a href="'.get_permalink().'">'.get_the_post_thumbnail($post->ID, 'slide',
					array(
						'alt' => trim(strip_tags($post->post_title)),
						'title' => trim(strip_tags($post->post_title)),
					)).'</a>';
				?>
				<?php if (get_the_id() != 1573): ?>
					<div class="post-category"><?php the_category(' / '); ?></div>
				<?php endif; ?>
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

				<div class="post-meta"><?php
					printf(__('by <span class="post-author"><a href="%s" title="Posts by %s">%s</a></span> on <span class="post-date">%s</span>', 'sight'),
						get_author_posts_url(get_the_author_meta('ID')),
						get_the_author(),
						get_the_author(),
						get_the_time('M j, Y')
					); ?> &bull;
					<?php if (get_comments_number() > 0): //Only show the comments link if there are comments ?>
						<?php comments_popup_link(__('No Comments', 'sight'), __('1 Comment', 'sight'), __('% Comments', 'sight'), '', __('Comments Closed', 'sight') ); ?>
					<?php endif; ?>
					<?php edit_post_link(__('Edit entry', 'sight'), '&bull; '); ?>
				</div>
				<div class="post-content">
					<?php 
						if (get_the_id() == 1573) {
						echo "We’ve set ourselves the challenge at 50for15 of travelling to 50 marginal constituencies that will determine the outcome of the general election in May, which, it’s become a truism to say, is one of the least predictable in a generation. And now you can see the full geographical insanity of our undertaking on one map...";
						} 
						elseif (has_post_thumbnail() && function_exists('smart_excerpt')) smart_excerpt(get_the_excerpt(), 50);
						else smart_excerpt(get_the_excerpt(), 150); 
					?>
				</div>
			</div>
		</div>

	<?php endforeach; ?>

	</div>

	<a href="javascript: void(0);" id="larr"></a>
	<a href="javascript: void(0);" id="rarr"></a>
</div>
<?php endif; ?>
