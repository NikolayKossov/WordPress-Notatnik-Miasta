<?php
defined('ABSPATH') || exit;
add_action('after_setup_theme', function () {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('responsive-embeds');
    add_theme_support('editor-styles');
    add_editor_style('style.css');
    register_nav_menus(['primary' => __('Menu główne', 'notatnik-miasta')]);
});
add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('notatnik-miasta', get_stylesheet_uri(), [], wp_get_theme()->get('Version'));
});
