<?php
/**
 * Custom hooks.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'understrap_site_info' ) ) {
	/**
	 * Add site info hook to WP hook library.
	 */
	function understrap_site_info() {
		do_action( 'understrap_site_info' );
	}
}

if ( ! function_exists( 'understrap_add_site_info' ) ) {
	add_action( 'understrap_site_info', 'understrap_add_site_info' );

	/**
	 * Add site info content.
	 */
	function understrap_add_site_info() {
		$the_theme = wp_get_theme();

		$site_info = sprintf(
			'%1$s',
			sprintf(
				/* translators:*/
				esc_html__( 'Realizzato da %1s con %2s & %3s', 'understrap' ),
				'<a href="https://www.matacottidesign.it">'.esc_html__( 'Matacotti Design', 'understrap' ).'</a>',
				'<i class="fa fa-heart" style="color:#ff0000"></i>',
				'<i class="fa fa-wordpress text-white" aria-hidden="true"></i>'
			)
		);

		echo apply_filters( 'understrap_site_info_content', $site_info ); // WPCS: XSS ok.
	}
}
