<?php
/**
 * This is a sample local-config.php file.
 * In it, you *must* include the four main database defines.
 *
 * You may include other settings here that you only want enabled on your local development checkouts.
 *
 * @package Zoobie
 */


/* ---------------------------------------------------------------------------------
 * -- Load database info for local development
 * ---------------------------------------------------------------------------------
 *
 */
define( 'DB_NAME',      'database_name_here' );
define( 'DB_USER',      'username_here' );
define( 'DB_PASSWORD',  'password_here' );
define( 'DB_HOST',      'localhost' );


/* ---------------------------------------------------------------------------------
 * -- Custom Content Directory
 * ---------------------------------------------------------------------------------
 *
 * Uncomment the 'define WP_CONTENT_URL' if your WordPress in running from a
 * web root folder.
 *
 */
//define( 'WP_CONTENT_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/zoobie/content' );