<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'oF6Dw+S92gd7SVQljWxhIjYgOqf47kU56RSopnjvA5RI0+MJErMPxu1Cu1KTgE6YFynsCi+G5M9Hhs+yLO14sA==');
define('SECURE_AUTH_KEY',  'WuVs8GG8jpat38odUpL3z0A++dK2aIz7HQNQCAi5tMDa41hHehtpmi02kozuz04f5tJct1BSMxzFR8OM/dAS/Q==');
define('LOGGED_IN_KEY',    'rBJ454ygeRrtm60N4m7mU8PS9JqBtAWOD4xc07d6nA6AuKrHNPwn03QRECOrrky7IaAH+1+g0IacLYSLYQ4WMw==');
define('NONCE_KEY',        'mkViKLVSErUgoYDR7xsn+DDTeAV6oy53GF9nsgg/J5de4Y9cobiOlSI/o6qDdy1YWnQUkRBS4lQDSWPdx44n0g==');
define('AUTH_SALT',        'cETWeW4eqZ01gfpGEeu1Yh4rtAaMmC98aSCLKgueAjSTk9MRDUu0loQAA3fpIbP6l4cXe9pozIDRt2oFqrdQpA==');
define('SECURE_AUTH_SALT', '0Z63To6d07ulbP/kyM2epSUF/s/DplKLlCW1Ce7DKZZvHomIapVz1KjYBD2UNKYMg1VZVjstfCd+eefDsLUW9A==');
define('LOGGED_IN_SALT',   '1ZT00btHEpbyeZ7jXxGQbD3FuWxudsQx2mHx0qjuMB1dobriYF2J3se/wKCxxhmneIKsFr+L4H+1K7FIeNtIGA==');
define('NONCE_SALT',       'yG/F3z/C64dRbYQMHwWXc4JH8V89ofHNxAyBovXbdyB7b3NCuSw3/pp3xAgIPOjHpaWKosVc1cFR6M68X5+8mA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
