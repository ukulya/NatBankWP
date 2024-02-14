<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();
?>
<section class="section-hero" style="background-image: url('/wp-content/uploads/home-bg.webp')">
	<div class="container">
		<div class="row">
			<div class="col-lg-5 col-md-5">
				<h1><?php esc_html_e(get_field('nothing_here_title',30), 'twentytwentyone'); ?></h1>
				<p><?php esc_html_e(get_field('nothing_here_text',30), 'twentytwentyone'); ?></p>
				<?php get_search_form(); ?>
			</div>
		</div>
	</div>
</section>
<?php
get_footer();
