<?php

/**
 * Plugin Name: Custom Elementor Slider
 * Description: Adds a custom slider widget for Elementor.
 * Version: 1.0.0
 * Author: Your Name
 * Text Domain: custom-elementor-slider
 */
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

/**
 * Register oEmbed Widget.
 *
 * Include widget file and register widget class.
 *
 * @since 1.0.0
 * @param \Elementor\Widgets_Manager $widgets_manager Elementor widgets manager.
 * @return void
 */
function register_oembed_widget($widgets_manager)
{
    require_once(__DIR__ . '/widgets/custom-slider.php');
    $widgets_manager->register_widget_type(new \Custom_Elementor_Widget());
}
add_action('elementor/widgets/widgets_registered', 'register_oembed_widget');

function qualitystylzsuites_addon_enqueue_custom_styles()
{
    wp_enqueue_script('slick-slider-plugin', plugin_dir_url(__FILE__) . 'assets/js/slick.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('slick-slider-settings', plugin_dir_url(__FILE__) . 'assets/js/scripts-js.js', array('jquery'), time(), true);
    wp_enqueue_style('custom-styles', plugin_dir_url(__FILE__) . 'assets/css/styles.css', array(), time(), 'all');
}
add_action('wp_enqueue_scripts', 'qualitystylzsuites_addon_enqueue_custom_styles');
