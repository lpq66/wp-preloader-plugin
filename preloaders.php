<?php
/*
Plugin Name: Preloader
Description: "Simple preloader plugin for your WordPress website"
Author: Walter Loburak
Version: 1.0

*/


/* Adding Latest jQuery from WordPress */
function preloader_wp_latest_jquery() {
	wp_enqueue_script('jquery');
}
add_action('init', 'preloader_wp_latest_jquery');

/* Adding plugin javascript active file */
function preloader_plugin_active() {

	wp_register_script( 'plugin-script-active', plugins_url('main.js', __FILE__) );
    wp_enqueue_script( 'plugin-script-active' );

}
add_action( 'init', 'preloader_plugin_active' );

/* Adding plugin custom CSS file */
function preloader_plugin_styles() {

	wp_register_style( 'plugin-style', plugins_url('preloader.css', __FILE__) );
		wp_enqueue_style( 'plugin-style' );

}
add_action( 'wp_enqueue_scripts', 'preloader_plugin_styles' );

/* HTML Content */
function preloader_main_content () {
?>
<div id="preloader">
		<div id="loading">
			<div id="cssload-pgloading">
				<div class="cssload-loadingwrap">
					<ul class="cssload-bokeh">
						<li></li>
						<li></li>
						<li></li>
						<li></li>
					</ul>
				</div>
			</div>
		</div>
	</div>

<?php
}
add_action ('wp_enqueue_scripts', 'preloader_main_content');

?>
