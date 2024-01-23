<?php /**
 * Enqueue scripts and styles.
 */
function lbrtx_scripts() {
	wp_enqueue_style( 'lbrtx-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'lbrtx-style', 'rtl', 'replace' );

	wp_enqueue_script( 'lbrtx-custom', get_template_directory_uri() . '/js/custom.js', array(), _S_VERSION, true );
	
	if ( !is_front_page() ) {
		wp_enqueue_script( 'lbrtx-fxclub', 'https://lib.fxclub.org/landing/js/landing-api.min.2.6.0.js', array('lbrtx-jquery'), _S_VERSION, true );
		wp_enqueue_script( 'lbrtx-jquery', 'https://lib.fxclub.org/js/jquery.js', array(), _S_VERSION, true );
		wp_enqueue_script( 'lbrtx-registration', get_template_directory_uri() . '/js/registration.js', array('lbrtx-fxclub'), _S_VERSION, true );
		wp_localize_script('lbrtx-registration', 'registration', [
			'apiKey' => get_locale() === 'ru_RU' ? 'baa753c543229b8831c130b549b16577338cf3e5' : '5efdfdae3efff07bdb11f2d9c689482091684e1c',
		]);
	}
}
add_action( 'wp_enqueue_scripts', 'lbrtx_scripts' );