<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

define('AUTH_KEY',         '5d82HVTwEAtMQBrlhMTee77/VMNPbHcXw8+uiXCNbwM6yUuoQ8uOdG/6QHLkI5Af48Y6gXcMHXB9jVBp+axonQ==');
define('SECURE_AUTH_KEY',  '5VIC8ATHjnu3SkL5QInnVbFB38kIOmhCbSnaoSsywCCA2bfl+Vj2mQmSXgR3q00O0xZDWfmV7I587chT/0c/qg==');
define('LOGGED_IN_KEY',    '66KGdjnifM9Hk0WoLCHOmUgyO7P7NW7qhxB2HvWRnuneKW7KQts7+358jjpR8Fj375AyNQlfVTrAYkG/qDmMKg==');
define('NONCE_KEY',        'l1b78oa2iQ28XCKc6zokYHdNvHfxNjMZU+l4phUezNK5zIST5nQKzWJqnRkzP5kGHjuQ+67s4SfA1uYWIb6R7A==');
define('AUTH_SALT',        'iDCbWi8MEBV6ejOttgSuKD+45WWfHV5vTchyKukBHBHyiHMKxW7kIV8nx8n762G7tpnoEYnmcFY88Oruy+/ssg==');
define('SECURE_AUTH_SALT', '3jhTWkRpiFlW1hKJyc9dhdqX6HcawfG49mAaWNmJ2Ue7XUmAIxHJFVfjQx9GRCEltWqzlIjEQci0ushVf3X5Ug==');
define('LOGGED_IN_SALT',   'zAZ5zX1ifa5+a6gRtjdMxzaB2RmINGlqis6bbzZv10q+9qjB91adhdBeFRS4cfqFE7+yZHhI4pK9J6A0eTPwFA==');
define('NONCE_SALT',       'xk/pDwJyTVcAReWqNP6P8C1bSnP0NyAFg6DbiiMTFeztFg155gs9zE2keG8QMgalXvro8fk8eF4qqlmEpA1P6Q==');