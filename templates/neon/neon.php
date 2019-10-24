<?php
namespace Sitewide_Sales\templates\neon;

/**
 * Neon Template for Sitewide Sales
 *
 */

/**
 * Add template to list.
 */
function swsale_templates( $templates ) {
	$templates['neon'] = 'Neon';

	return $templates;
}
add_filter( 'swsale_templates', __NAMESPACE__ . '\swsale_templates' );

/**
 * Load our landing page and banner CSS/JS if needed.
 */
function wp_enqueue_scripts() {
	// Load landing page CSS if needed.
	if ( swsales_landing_page_template() == 'neon' ) {
		wp_register_style( 'swsales_neon_landing_page', plugins_url( 'templates/neon/landing-page.css', SWSALES_BASENAME ), null, SWSALES_VERSION );
		wp_enqueue_style( 'swsales_neon_landing_page' ); 
	}

	// Load banner CSS if needed.
	if ( swsales_banner_template() == 'neon' ) {
		wp_register_style( 'swsales_neon_banner', plugins_url( 'templates/neon/banner.css', SWSALES_BASENAME ), null, SWSALES_VERSION );
		wp_enqueue_style( 'swsales_neon_banner' );
	} 
}
add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\wp_enqueue_scripts' );

function swsales_landing_page_content_neon( $content ) {
	$content_before = '<div id="swsale-landing-page-wrap-neon" class="swsales-landing-page-wrap">';
	$content_after = '</div>';

	$content = $content_before . $content . $content_after;

	return $content;
}
add_action( 'swsales_landing_page_content_neon', __NAMESPACE__ . '\swsales_landing_page_content_neon' );