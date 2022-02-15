<?php

if (!defined('_S_VERSION')) {
    define('_S_VERSION', '1.0.0');
}

function nfj_setup()
{
    load_theme_textdomain('nfj', get_template_directory() . '/languages');
    add_theme_support('automatic-feed-links');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');

    // This theme uses wp_nav_menu() in one location.
    register_nav_menus(
        array(
            'menu-1' => esc_html__('Primary', 'nfj'),
        )
    );
}
add_action('after_setup_theme', 'nfj_setup');

function nfj_content_width()
{
    $GLOBALS['content_width'] = apply_filters('nfj_content_width', 640);
}
add_action('after_setup_theme', 'nfj_content_width', 0);

function nfj_widgets_init()
{
    register_sidebar(
        array(
            'name'          => esc_html__('Sidebar', 'nfj'),
            'id'            => 'sidebar-1',
            'description'   => esc_html__('Add widgets here.', 'nfj'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );
}
add_action('widgets_init', 'nfj_widgets_init');


function nfj_scripts()
{

    wp_enqueue_style('fontawesome-css', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css');
    wp_enqueue_style('nfj-style', get_stylesheet_uri(), array(), _S_VERSION);
    wp_enqueue_style('responsivecss', get_template_directory_uri() . '/asset/css/responsive.css', array(), '1.0.1');
    wp_enqueue_style('font', 'https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Rowdies:wght@400;700&display=swap', array(), '1.0.1');


    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js', array(), '2.1.13', true);

    wp_enqueue_script('typerjs', 'https://unpkg.com/typewriter-effect@latest/dist/core.js', array(), '1.0.1', true);
    wp_enqueue_script('aosjs', 'https://unpkg.com/aos@2.3.1/dist/aos.js', array(), '1.0.1', true);
    wp_enqueue_script('mainjs', get_template_directory_uri() . '/asset/js/main.js', array(), '1.0.1', true);
    if (is_page_template('template-home.php')) {
        wp_enqueue_script('navabarjs', get_template_directory_uri() . '/asset/js/navbar.js', array(), '1.0.1', true);
    }
}
add_action('wp_enqueue_scripts', 'nfj_scripts');
