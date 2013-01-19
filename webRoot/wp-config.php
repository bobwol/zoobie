<?php
/**
 * The base configurations of the WordPress.
 *
 * @package Zoobie
 */


/* ---------------------------------------------------------------------------------
 * -- Load database info and local development parameters
 * ---------------------------------------------------------------------------------
 *
 */
if ( file_exists( dirname( __FILE__ ) . '/local-config.php' ) ) {

    include( dirname( __FILE__ ) . '/local-config.php' );
} else {

    define( 'DB_NAME',      'database_name_here' );
    define( 'DB_USER',      'username_here' );
    define( 'DB_PASSWORD',  'password_here' );
    define( 'DB_HOST',      'localhost' );
}


/* ---------------------------------------------------------------------------------
 * -- Custom Content Directory
 * ---------------------------------------------------------------------------------
 *
 */
define( 'WP_CONTENT_DIR', dirname( __FILE__ ) . '/content' );
define( 'WP_CONTENT_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/content' );


/* ---------------------------------------------------------------------------------
 * -- Database Charset/Collate Type
 * ---------------------------------------------------------------------------------
 *
 * You almost certainly do not want to change these
 *
 */
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');


/* ---------------------------------------------------------------------------------
 * -- Authentication Unique Keys and Salts
 * ---------------------------------------------------------------------------------
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 */
define( 'AUTH_KEY',         'put your unique phrase here' );
define( 'SECURE_AUTH_KEY',  'put your unique phrase here' );
define( 'LOGGED_IN_KEY',    'put your unique phrase here' );
define( 'NONCE_KEY',        'put your unique phrase here' );
define( 'AUTH_SALT',        'put your unique phrase here' );
define( 'SECURE_AUTH_SALT', 'put your unique phrase here' );
define( 'LOGGED_IN_SALT',   'put your unique phrase here' );
define( 'NONCE_SALT',       'put your unique phrase here' );


/* ---------------------------------------------------------------------------------
 * -- WordPress Database Table prefix
 * ---------------------------------------------------------------------------------
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 *
 */
$table_prefix  = 'wp_';


/* ---------------------------------------------------------------------------------
 * -- WordPress Localized Language, defaults to English.
 * ---------------------------------------------------------------------------------
 *
 * Change this to localize WordPress.
 *
 */
define( 'WPLANG', '' );


/* ---------------------------------------------------------------------------------
 * -- For developers: WordPress debugging mode.
 * ---------------------------------------------------------------------------------
 *
 * Change this to true to enable the display of notices during development.
 *
 */
define( 'WP_DEBUG', false );


/* ---------------------------------------------------------------------------------
 * -- Bootstrap WordPress
 * ---------------------------------------------------------------------------------
 *
 * That's all, stop editing! Happy coding!
 *
 */
if ( !defined( 'ABSPATH' ) ) {

    define( 'ABSPATH', dirname( __FILE__ ) . '/wp/' );
}
require_once( ABSPATH . 'wp-settings.php' );
