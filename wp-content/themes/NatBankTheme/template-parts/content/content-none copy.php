<?php

/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<section class="no-results not-found section-hero" style="background-image: url('/wp-content/uploads/home-bg.webp')">
	<div class="container">
		<div class="row">
			<div class="col-lg-5 col-md-5">
				<?php if (is_search()) : ?>
					<h1 class="">
						<?php
						printf(
							/* translators: %s: Search term. */
							esc_html__(get_field('results_title', 30) . ' "%s"', 'twentytwentyone'),
							'<span class="page-description search-term">' . esc_html(get_search_query()) . '</span>'
						);
						?>
					</h1>
				<?php else : ?>
					<h1 class=""><?php esc_html_e(get_field('nothing_here_text', 30), 'twentytwentyone'); ?></h1>
				<?php endif; ?>
				<?php if (is_search()) : ?>
					<p><?php esc_html_e(get_field('nothing_matched_text', 30), 'twentytwentyone'); ?></p>
					<?php get_search_form(); ?>
				<?php else : ?>
					<p><?php esc_html_e('It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'twentytwentyone'); ?></p>
					<?php get_search_form(); ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>