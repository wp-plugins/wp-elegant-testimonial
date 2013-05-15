<?php
/*
Plugin Name: WP Elegant Testimonial
Version: 1.1.4
Plugin URI: http://wphowto.net/?p=295
Author: wpreviewproduct
Author URI: http://wphowto.net/
Description: A simple WordPress plugin to add testimonials to a WordPress post or page.
*/
define('WP_ELEGANT_TESTIMONIAL_URL', plugins_url('',__FILE__));
define('WP_ELEGANT_TESTIMONIAL_VERSION', "1.1.4");
include_once('wp-elegant-testimonial-menu.php');
add_action('wp_enqueue_scripts', 'wp_elegant_testimonial_enqueue_scripts');
add_action( 'admin_menu', 'wp_elegant_testimonial_plugin_menu' );
add_shortcode('wp_elegant_testimonial','wp_elegant_testimonial_handler');

function wp_elegant_testimonial_plugin_menu()
{
	add_options_page('WP Elegant Testimonial Options', 'WP Elegant Testimonial', 'manage_options', 'wp-elegant-testimonial', 'wp_elegant_testimonial_display_menu' );	
}

function wp_elegant_testimonial_handler($atts)
{
	extract(shortcode_atts(array(
		'name' => '',
		'company' => '',
		'text' => '',
		'image' => '',
	), $atts));
	$div_id = "wp-elegant-testimonial".uniqid();
	$output = <<<EOT
    <div id="$div_id" style="width: 200px;padding: 5px;">
    	<div style="text-align: center;">
	        <div class="theme-left"><img src="$image" title="$text"/></div>
	        <div class="testimonials-title">$name</div>
	        <div class="testimonials-company">$company</div>
        </div>
    </div>
	<script type="text/javascript">
	/* <![CDATA[ */
	jQuery(document).ready(function($){
	      $("#$div_id img[title]").tooltip();
		});
	/*]]>*/
	</script>
EOT;
	return $output; 
}

function wp_elegant_testimonial_enqueue_scripts()
{
	if (!is_admin()) 
    {
    	wp_enqueue_script('jquery');
    	wp_register_script('jquery-tools', 'http://cdn.jquerytools.org/1.2.7/full/jquery.tools.min.js');
	    wp_enqueue_script('jquery-tools');
    	wp_register_style('wp-elegant-testimonial-style', WP_ELEGANT_TESTIMONIAL_URL.'/wp-elegant-testimonial.css');
        wp_enqueue_style('wp-elegant-testimonial-style');	
    }	
}

?>
