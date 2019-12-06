<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Fenchurch_Barbers
 */

get_header();
?>
<main id="front-page">
    <?php
		while ( have_posts() ) :
			the_post();
			the_content();
		endwhile; // End of the loop.
	?>
	<div id="img-canvas">
		<div class="column">
			<img src="<?php echo bloginfo('url'); ?>/wp-content/themes/fenchurch-barbers/public/imgs/one.jpeg"/>
			<img src="<?php echo bloginfo('url'); ?>/wp-content/themes/fenchurch-barbers/public/imgs/two.jpeg"/>
			<img src="<?php echo bloginfo('url'); ?>/wp-content/themes/fenchurch-barbers/public/imgs/four.jpeg"/>
		</div>
		<div class="column">
			<img src="<?php echo bloginfo('url'); ?>/wp-content/themes/fenchurch-barbers/public/imgs/five.jpeg"/>
			<img src="<?php echo bloginfo('url'); ?>/wp-content/themes/fenchurch-barbers/public/imgs/six.jpeg"/>
			<img src="<?php echo bloginfo('url'); ?>/wp-content/themes/fenchurch-barbers/public/imgs/eight.jpeg"/>
		</div>
		<div class="column">
			<img src="<?php echo bloginfo('url'); ?>/wp-content/themes/fenchurch-barbers/public/imgs/fifteen.jpeg"/>
			<img src="<?php echo bloginfo('url'); ?>/wp-content/themes/fenchurch-barbers/public/imgs/eleven.jpeg"/>
			<img src="<?php echo bloginfo('url'); ?>/wp-content/themes/fenchurch-barbers/public/imgs/twelve.jpeg"/>
		</div>
	</div>
</main>
<?php
get_footer();