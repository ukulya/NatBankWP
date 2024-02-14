<?php
/**
 * The searchform.php template.
 *
 * Used any time that get_search_form() is called.
 *
 * @link https://developer.wordpress.org/reference/functions/wp_unique_id/
 * @link https://developer.wordpress.org/reference/functions/get_search_form/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

/*
 * Generate a unique ID for each form and a string containing an aria-label
 * if one was passed to get_search_form() in the args array.
 */
$twentytwentyone_unique_id = wp_unique_id( 'search-form-' );

$twentytwentyone_aria_label = ! empty( $args['aria_label'] ) ? 'aria-label="' . esc_attr( $args['aria_label'] ) . '"' : '';
?>
<?php if(WPGlobus::Config()->language == 'he'){
		 $search_title = 'חיפוש';
		} elseif(WPGlobus::Config()->language == 'es') { 
			$search_title = 'Buscar';
		}else{
			$search_title = 'Search';
		}?>
<form role="search" <?php echo $twentytwentyone_aria_label; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- Escaped above. ?> method="get" class="search-form row" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label for="<?php echo esc_attr( $twentytwentyone_unique_id ); ?>" class="d-none"><?php _e( 'Search&hellip;', 'twentytwentyone' ); // phpcs:ignore: WordPress.Security.EscapeOutput.UnsafePrintingFunction -- core trusts translations ?></label>
	<div class="col-lg-8">
	<input type="search" id="<?php echo esc_attr( $twentytwentyone_unique_id ); ?>" class="search-field form-control" value="<?php echo get_search_query(); ?>" name="s" placeholder="<?php echo $search_title; ?> ..."/>
	</div>
	<div class="col-lg-4">
		
	<input type="submit" class="search-submit custom-btn" value="<?php echo esc_attr_x( $search_title, 'submit button', 'twentytwentyone' ); ?>" />
	</div>
</form>
