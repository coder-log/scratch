<?php
/**
 * Widget areas
 *
 * @package     Scratch
 * @author      Javier Sánchez Serrano
 * @copyright   Copyright (c) 2019 Javier Sánchez Serrano
 * @license     GPL-2.0+
 *
 */



genesis_register_sidebar(array(
    'id'            => 'home-welcome',
    'name'          => __('Home Welcome', 'scratch'),
    'description'   => __('This is a widget area in the front page', 'scratch'),

));

genesis_register_sidebar(array(
    'id'            => 'call-to-action',
    'name'          => __('Call to Action', 'scratch'),
    'description'   => __('This is a call to action widget area in the front page', 'scratch'),

));