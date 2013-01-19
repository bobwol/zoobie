<?php
/**
 * Front to the WordPress. This file does not do anything, but loads
 * wp-blog-header.php which does and tells WordPress to load the theme.
 *
 * @package Zoobie
 */


/* ---------------------------------------------------------------------------------
 * -- Tells WordPress to load the WordPress theme and output it
 * ---------------------------------------------------------------------------------
 *
 */
define('WP_USE_THEMES', true);


/* ---------------------------------------------------------------------------------
 * -- Loads the WordPress Environment and Template
 * ---------------------------------------------------------------------------------
 *
 */
require('./wp/wp-blog-header.php');
