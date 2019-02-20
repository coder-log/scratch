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
 */
 add_action('genesis_setup', 'scratch_setup');
 function scratch_setup() {

 }