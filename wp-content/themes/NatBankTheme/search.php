<?php

/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();

if (have_posts()) {
?>
	<section class="section-hero" style="background-image: url('/wp-content/uploads/home-bg.webp')">
		<div class="container">
			<div class="row">
				<div class="col-lg-5 col-md-5">
					<h1>
						<?php
						printf(
							/* translators: %s: Search term. */
							esc_html__(get_field('results_title', 30) . ' "%s"', 'twentytwentyone'),
							'<span class="page-description search-term">' . esc_html(get_search_query()) . '</span>'
						);
						?></h1>
				</div>
			</div>
		</div>
	</section>
	<div class="search-result-count container">
		<h2 class=""><?php
		printf(
			esc_html(
				/* translators: %d: The number of search results. */
				_n(
					get_field('result_text', 30),
					get_field('results_text', 30),
					(int) $wp_query->found_posts,
					'twentytwentyone'
				)
			),
			(int) $wp_query->found_posts
		);
		?></h2>
	<div class="row">
<?php
	// Start the Loop.
	while (have_posts()) { 
		the_post();

		/*
		 * Include the Post-Format-specific template for the content.
		 * If you want to override this in a child theme, then include a file
		 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
		 */
		get_template_part('template-parts/content/content-excerpt', get_post_format());
	} // End the loop.

	// Previous/next page navigation.
	twenty_twenty_one_the_posts_navigation();

	// If no content, include the "No posts found" template.
} else {
	get_template_part('template-parts/content/content-none');
	} ?>
	</div>
</div>
<?php get_footer(); ?>
