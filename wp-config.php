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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'hajer' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



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
define( 'AUTH_KEY',         'e2ooqcQpwRdO82ylIfueMgs0a2ySXAxXchS1MXetvZvUePufDXwECBVIYxbbpTEz' );
define( 'SECURE_AUTH_KEY',  '5f5Y59H64V9u6J4tHSYlESgAwFNvgjYqAvJY2zMdOA4B59nR2ADBRQWWViLA07Ne' );
define( 'LOGGED_IN_KEY',    '7IcNKTuveAfhOXIZpkEdRDmCHUwGeYHLEBu2nGuV3fA1vkmuYYyGi2JjJeReKdha' );
define( 'NONCE_KEY',        'I9tSBjrHn5pNo8zKe7gJI844TCignis09qVnQHHOkktHqh9gNF9j0IV4WX77GmIq' );
define( 'AUTH_SALT',        'ZqZc5B9AWkgKvTRE6pObW1h5fOtuwnSz6V74YoLmAuE8LPfJj1zJYqxUtVxi5yUL' );
define( 'SECURE_AUTH_SALT', 'XerSW5dA1GzlGG4VU4njR1co7MDuADhsj3s5xD7QOr9nluu7nHbRASXzM1omheCr' );
define( 'LOGGED_IN_SALT',   'pv1COeXJTSMTpLKztNeZY9XysNvbsWGdKrRQ3Xl86KqdbCRiw8w7TLHxMzxhML8y' );
define( 'NONCE_SALT',       'RLzmFpHSL5Zq9Prc3x6E6fIIOOnSkf7ZaQgBwhzpl3J42KftEyRmbErwM8GcihCF' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
