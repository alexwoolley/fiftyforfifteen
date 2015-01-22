<div class="sidebar">

<?php
//See http://stackoverflow.com/questions/1735252/php-countdown-to-date
$date = strtotime("May 7, 2015 11:59 PM");
$remaining = $date - time();

$days_remaining = floor($remaining / 86400);
$hours_remaining = floor(($remaining % 86400) / 3600);
?>


<div id="milestone" class="widget_text">
	<h2>The General Election</h2>
	<h3>—7th May 2015—</h3>
	<div id="milestone-times">
		<div class="milestone-time">
				<?php 
					if ($days_remaining == 1) {
						echo $days_remaining . " day";
					} else {
						echo $days_remaining . " days";
					} 
				?>			
		</div> 
	and
		<div class="milestone-time">
			<?php if ($hours_remaining == 1) {
				echo $hours_remaining . " hour";
			} else {
				echo $hours_remaining . " hours";
			}
			?>
		</div>
	to go
	</div>
</div>



	<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar')):
		$widget_args = array(
			'after_widget' => '</div></div>',
			'before_title' => '<h3>',
			'after_title' => '</h3><div class="widget-body clear">'
		);
	?>


	<?php the_widget('GetConnected', 'title=Get Connected', $widget_args); ?>

	<?php the_widget('Recentposts_thumbnail', 'title=Recent posts', $widget_args); ?>

	<div class="widget sponsors">
		<h3><?php _e('Our sponsors', 'sight'); ?></h3>
		<div class="widget-body">
			<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/example/sponsor01.jpg" width="200" height="125" alt=""/></a>
			<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/example/sponsor02.jpg" width="200" height="125" alt=""/></a>
			<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/example/sponsor03.jpg" width="200" height="125" alt=""/></a>
		</div>
	</div>
			
	<?php endif; ?>
</div>
