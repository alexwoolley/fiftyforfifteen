<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
		<title><?php wp_title('|', true, 'right'); ?></title>
		<meta http-equiv="Content-language" content="<?php bloginfo('language'); ?>" />
		<link rel="profile" href="http://gmpg.org/xfn/11" />
		<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
		<?php wp_head(); ?>
		<?php if (is_home() && !get_option('ss_disable')): ?>
		<script type="text/javascript">
		(function($) {
			$(function() {
				$('#slideshow').cycle({
					fx: 'scrollHorz',
					timeout: <?php echo (get_option('ss_timeout')) ? get_option('ss_timeout') : '7000' ?>,
					next: '#rarr',
					prev: '#larr'
				});
			})
		})(jQuery)
		</script>
		<?php endif; ?>
		<!-- single post js -->
		<?php 
		  if( is_single() and $singlePostJs = get_post_meta($post->ID, 'single-post-js', true) )
		   echo $singlePostJs;
		?>
		<?php 
			// if (is_category()) {
				get_template_part( 'charts' );
			// }
		?>
	</head>
	<body <?php body_class(); ?><?php echo (get_option('bg_color')) ? 'style="background-color: '.get_option('bg_color').';"' : '' ?>>
		<div class="wrapper">
			<div class="header clear">
				<div class="logo">
					<a href="<?php echo home_url(); ?>"><img src="<?php echo (get_option('logo_url')) ? get_option('logo_url') : get_template_directory_uri().'/images/logo.png' ?>" alt="<?php bloginfo('name'); ?>"/></a>
				</div>

				<?php get_search_form(); ?>

				<?php wp_nav_menu(array('theme_location' => 'top_menu', 'depth' => 1, 'container' => 'div', 'container_class' => 'menu', 'menu_id' => false, 'menu_class' => false, 'fallback_cb' => false)); ?>
			</div>

			<?php wp_nav_menu(array('theme_location' => 'navigation', 'depth' => 2, 'container' => 'div', 'container_class' => 'nav', 'menu_class' => 'dd', 'menu_id' => 'dd', 'walker' => new extended_walker(), 'fallback_cb' => false)); ?>

			<?php if (is_home() && !get_option('ss_disable')) get_template_part('slideshow'); ?>

			<!-- Container -->
			<div id="container" class="clear">
				<!-- Content -->
				<div id="content">
