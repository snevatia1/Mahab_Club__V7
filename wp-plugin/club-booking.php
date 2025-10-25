<?php
/*
Plugin Name: Club Mahabaleshwar Booking
Description: Embeds the booking app.
*/

function cmb_enqueue_app() {
  wp_enqueue_script('cmb-app', plugin_dir_url(__FILE__) . '../build/static/js/main.js', [], '1.0', true);
  wp_enqueue_style('cmb-styles', plugin_dir_url(__FILE__) . '../build/static/css/main.css');
}
add_action('wp_enqueue_scripts', 'cmb_enqueue_app');

function cmb_shortcode() {
  return '<div id="cmb-root"></div>'; // React mounts here
}
add_shortcode('club_booking', 'cmb_shortcode');
?>
