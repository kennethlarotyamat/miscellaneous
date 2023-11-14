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


define('AUTH_KEY',         'fm/9MPEbDC6fxs8vjIn0NEjnzkAROsF/ius+7oKSwF0kwvJeJU1FupMywkoRdi8ni6yjZPGhVb5Rqq0wCe06Ig==');
define('SECURE_AUTH_KEY',  '48z8Kkp74BQAk2gORO8l77WR/p2eCLWtFvk++FXu/pZpnqLFig/seGBQDP9EwRyps7SyvGFAYVR/d2dFVeOm5g==');
define('LOGGED_IN_KEY',    '9BB9hv5/6dya8FXqMAG5YZXBfLpSlsgzpFog9oJ6jw8HvW13E/6ZgCIQQJAAxR4UmDJf4kSZF2xph8SY/TLtKA==');
define('NONCE_KEY',        'CpNSDrQx1honwU0oe2WGMiet+sM5AOLwbWpSJeFL5Y20dsACqbrHsNfXRt5G7/oRse8y0xG0My9LwAVCgd2KGg==');
define('AUTH_SALT',        'jX8M1Pzl2gJPsnBEgo6q1ey6G1P528r3EwLMHDXCo1YqvVJOfaRkdyffbke4sge2EfKgqaDZ38VEPVOAHWOJ9g==');
define('SECURE_AUTH_SALT', 'QMAVYJN9Zr6ULtEy7EBRQ4Wcb2XsJNrOROw6VVmqEH/bk0ngsLzkvurhC3wOzrHJQp7Rgc7WsTzKrTrROIZA/w==');
define('LOGGED_IN_SALT',   '/gnzdKB2tzJR6gwBrxf36/dolz6IDdcAMlliy8wYBb8P0c3BCg0Wte7GT7hEsO8vGB+DQuox7UVOeSP0ByaHYA==');
define('NONCE_SALT',       'IVRmEnroy4MJJN4+5oVIsb2iOnR9gCdC07aUgqK+lk/uJk1/U8oBkR3LLS7tMPr6NTThqpUShR0vhxdWroVzYA==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
