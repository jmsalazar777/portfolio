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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'jean2' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         'tYk39rM54IfaaG8UNSXTuCxIbpICfWanEo75h8uknUhJjfNKps8kpwnSWY3qNgGg' );
define( 'SECURE_AUTH_KEY',  '2hRfXg3AOScyRqZo9RbvJkTPndUAYlWwwMDUCkuQJIOzK0Q9mC0dC7efwFS1k6Hm' );
define( 'LOGGED_IN_KEY',    'esCFoY1NYPQn5Ki1wmj4mpMxJvvaJvnHRPW4Bcl25AB8ADfb1r4SNGuIpCTTjXuy' );
define( 'NONCE_KEY',        'bZExCuejHwks9kIDiC2DOvWoLHS9Q4t5T1B6qyFenCe661Eh9sLJGngmk6XsO4aI' );
define( 'AUTH_SALT',        '5R1f5JMpkU3kEtG1b4DuYRWxsDFV5ceZ7cR5s3BdGUPVLQi0pNbDKlEiLHMrVH6C' );
define( 'SECURE_AUTH_SALT', '4enbIUR98gUZtglfpITrAQHfEYOsDWZ5xRJCFk8yZiYtGYzmuFxYxo7iVCsN7wap' );
define( 'LOGGED_IN_SALT',   'aV8oWFjH8fn3nWWZr1nSMjOnvR5j3uq5Erqdtnpmj7djhal4jWvcYTjI5gCj2eMI' );
define( 'NONCE_SALT',       'uqf7YXEJuPzfG9b7C9IUZT4vxHNdAtx9Drxr3133Ep60MIgBH0ZLNWkCWV7mKZ7q' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
