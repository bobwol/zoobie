<?php
/**
 * Zoobie Theme functions and definitions.
 *
 * This program is free software; you can redistribute it and/or modify it under the terms of the GNU
 * General Public License as published by the Free Software Foundation; either version 2 of the License,
 * or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without
 * even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * You should have received a copy of the GNU General Public License along with this program; if not, write
 * to the Free Software Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA 02110-1301 USA
 *
 * @package    Zoobie_Theme
 * @subpackage Functions
 * @version    0.1.0
 * @since      0.1.0
 * @author     Thiago Senna <thiago@thremes.com.br>
 * @copyright  Copyright (c) 2013, Thiago Senna
 * @link       https://github.com/trsenna/zoobie
 * @license    http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */


/* ---------------------------------------------------------------------------------
 * -- Load the core theme framework
 * ---------------------------------------------------------------------------------
 *
 */
require_once( trailingslashit( get_template_directory() ) . 'hybrid-core/hybrid.php' );
new Hybrid();


/* ---------------------------------------------------------------------------------
 * -- Do theme setup
 * ---------------------------------------------------------------------------------
 *
 * Do theme setup on the 'after_setup_theme' hook.
 *
 */
add_action( 'after_setup_theme', 'zoobietheme_setup_theme' );

function zoobietheme_setup_theme() {

    /* Get action/filter hook prefix. */
    $prefix = hybrid_get_prefix();

    /* Add theme support for core framework features. */
    add_theme_support( 'hybrid-core-styles', array( 'parent', 'style' ) );

    /* Load required scripts. */
    add_action('wp_enqueue_scripts', 'zoobietheme_enqueue_required_scripts');

    /* Load app scripts. */
    add_action('wp_enqueue_scripts', 'zoobietheme_enqueue_app_scripts');
}


/* ---------------------------------------------------------------------------------
 * -- Enqueue required Script files
 * ---------------------------------------------------------------------------------
 *
 * Load the following javascript libraries:
 * - jQuery
 * - Underscore.js
 * - Backbone.s
 *
 */
function zoobietheme_enqueue_required_scripts() {

    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'underscore' );
    wp_enqueue_script( 'backbone' );
}

/* ---------------------------------------------------------------------------------
 * -- Enqueue App Script files
 * ---------------------------------------------------------------------------------
 *
 * Load the following javascript files:
 * - js/models/_todo.js
 * - js/zoobie.app.js
 *
 */
function zoobietheme_enqueue_app_scripts() {

    wp_enqueue_script(
        'zoobie.models',
        get_template_directory_uri() . '/js/zoobie.models.js',
        array('backbone')
    );

    wp_enqueue_script(
        'zoobie.collections',
        get_template_directory_uri() . '/js/zoobie.collections.js',
        array('backbone')
    );

    wp_enqueue_script(
        'zoobie.views',
        get_template_directory_uri() . '/js/zoobie.views.js',
        array('backbone')
    );

    wp_enqueue_script(
        'zoobie.app',
        get_template_directory_uri() . '/js/zoobie.app.js',
        array('backbone')
    );
}