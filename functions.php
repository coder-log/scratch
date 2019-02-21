<?php
/**
 * Theme functionality
 *
 * @package     Scratch
 * @author      Javier Sánchez Serrano
 * @copyright   Copyright (c) 2019 Javier Sánchez Serrano
 * @license     GPL-2.0+
 *
 */

 //Load chidl theme textdomain.
 load_child_theme_textdomain('scratch');

/**
 * Theme setup.
 * Attach all of the site-wide functions to the correct hooks and filters. All the funcions themeselves are defined below this setup function.
 * The number 15 is for theme function is to force setup after Genesis parent, otherwise some things will be overriden.
 */
 add_action('genesis_setup', 'scratch_setup', 15);
 function scratch_setup() {
     //Define constants
     Define('CHILD_THEME_NAME','scratch');
     Define('CHILD_THEME_URL', 'http:/github.com/coder-log/scratch');
     Define('CHILD_THEME_VERSION', '1.0.0');

    //copy pasted from init.php in genesis framework
    //Add theme support for html5
    add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );
    //Add viewport meta tag for mobile browsers
    add_theme_support( 'genesis-responsive-viewport' );
    //Add theme support for accesibility
    add_theme_support(
        'genesis-accessibility',
        array(
            '404-page',
            'drop-down-menu',
            'headings',
            'rems',
            'search-form',
            'skip-links',
        )
    );

    //Add theme support for footer widgets
    add_theme_support('genesis_footer_widgets',3);

    //Unregister innecesary layouts
    genesis_unregister_layout('content-sidebar-sidebar');
    genesis_unregister_layout('sidebar-content-sidebar');
    genesis_unregister_layout('sidebar-sidebar-content');

    //Unregister secondary sidebar
    unregister_sidebar('sidebar-alt');

    //Add includes/widget-areas.php
    include_once(get_stylesheet_directory() . '/includes/widget-areas.php');

 }