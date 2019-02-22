<?php
/**
 * Front page
 *
 * @package     Scratch
 * @author      Javier Sánchez Serrano
 * @link http://www.zumodigital.com
 * @copyright   Copyright (c) 2019 Javier Sánchez Serrano
 * @license     GPL-2.0+
 *
 */

 add_action('genesis-meta', 'scratch_home_page_setup');

 /**
  * Setup the homepage layout by conditionally loading sections when 
  * widgets are active
  * @since 1.0.0
  */
$home_sidebars = array(
    'home_welcome' => is_active_sidebar( 'home-welcome'),
    'call_to_action' => is_active_sidebar( 'call-to.-action'),

);

function scratch_home_page_setup() {
    //Return early if no sidebars are active
    if (!in_array(true, $home_sidebars)) {
        return;
    }

    if( $home_sidebars['home-welcome']) {
        add_action('genesis_after_header', 'scratch_add_home_welcome');
    }
    if( $home_sidebars['call-to-action']) {
        add_action('genesis_after_header', 'scratch_add_call_to_action');
    }

}
 genesis();