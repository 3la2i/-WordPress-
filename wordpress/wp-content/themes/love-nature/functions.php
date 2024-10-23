<?php
/**
 * Enqueue Styles
 *
 * @package Love_Nature
 * @version GIT: 1.2
 *
 * @phpcs:disable
 * (c) 2024 Love Nature. All rights reserved.
 */

if (!function_exists('Love_Nature_setup')) {
    /**
     * Theme setup
     *
     * @return void
     */
    function Love_Nature_setup()
    {
        // Add theme support
        add_theme_support('custom-logo');
        add_theme_support('custom-header');
        add_theme_support('custom-background');
        add_theme_support('post-thumbnails');

        // Load text domain for translation
        load_theme_textdomain('love-nature', get_template_directory() . '/languages');
    }
}
add_action('after_setup_theme', 'Love_Nature_setup');

if (!function_exists('Love_Nature_Enqueue_style')) {
    /**
     * Enqueue style.
     *
     * @return void
     */
    function Love_Nature_Enqueue_style()
    {
        // Enqueue main stylesheet
        wp_enqueue_style('love-nature-style', get_stylesheet_uri(), array(), filemtime(get_stylesheet_directory() . '/style.css'));
    }
}
add_action('wp_enqueue_scripts', 'Love_Nature_Enqueue_style');
