<?php

/**
 *  functions and definitions
 *
 *
 * @package SnapBase
 * @since SnapBase 1.0
 */


if (!function_exists('snapbase_support')) :

    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * @since  1.0
     *
     * @return void
     */
    function snapbase_support()
    {

        // Add support for block styles.
        add_theme_support('wp-block-styles');

        // Enqueue editor styles.
        add_editor_style('style.css');
    }

endif;

add_action('after_setup_theme', 'snapbase_support');

if (!function_exists('snapbase_styles')) :

    /**
     * Enqueue styles.
     *
     * @since SnapBase 1.0
     *
     * @return void
     */
    function snapbase_styles()
    {
        // Register theme stylesheet.
        $theme_version = wp_get_theme()->get('Version');

        $version_string = is_string($theme_version) ? $theme_version : false;
        wp_register_style(
            'snapbase-style',
            get_template_directory_uri() . '/style.css',
            array(),
            $version_string
        );

        // Enqueue theme stylesheet.
        wp_enqueue_style('snapbase-style');
    }

endif;

add_action('wp_enqueue_scripts', 'snapbase_styles');

