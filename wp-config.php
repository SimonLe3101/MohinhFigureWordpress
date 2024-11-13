<?php

// BEGIN iThemes Security - Không sửa đổi hoặc xóa dòng này
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Tắt Trình chỉnh sửa tệp - Bảo mật > Cài đặt > WordPress Tweaks > Trình chỉnh sửa tệp
// END iThemes Security - Không sửa đổi hoặc xóa dòng này

define( 'ITSEC_ENCRYPTION_KEY', 'KGpESkVnQ0U/ZmhYRkJFUkMrW0M5cWYxQD9QX3FtRmJXNms9aGdvQkJ4SnZiLUxmQFpHSDxRd3FYOjJtKUlmIA==' );

# BEGIN WP Cache by 10Web
define( 'WP_CACHE', true );
define( 'TWO_PLUGIN_DIR_CACHE', '/home/doanmohi/public_html/wp-content/plugins/tenweb-speed-optimizer/' );
# END WP Cache by 10Web
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
define( 'DB_NAME', 'doanmohi_wp_dbkta' );

/** Database username */
define( 'DB_USER', 'doanmohi_wp_oseoo' );

/** Database password */
define( 'DB_PASSWORD', '7Ahn03%J%l4fm?sa' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3306' );

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
define('AUTH_KEY', '+qe5*GCJYtdngK+~7Q013*Wg-Nr]_7U@+Puu:H7+5Q6)8~f(Xaak1dF[u6z(789Q');
define('SECURE_AUTH_KEY', 'bDw+*LeuXa290:9&7vw0s8VxC7cL#yx8@/BM67uw|X%5Y8|2EI6N4Zlj9v|!2oUA');
define('LOGGED_IN_KEY', ')Mz3Y|]C6&9oa%5LI1sv&Pw0w|E!4ISNa_Br#/(o4;[+jcIYzs4MJeZQeY4W|24Y');
define('NONCE_KEY', '4#6i:%s1@8u%M9!I~:f14oDnTX51N(m+8M)73K7v2XWXY8REoSyzq2f:[5r:[4o6');
define('AUTH_SALT', 'rnI5V+8Kk3l_vO5xVm2AT1ee#G7J2:@R]r2qkf#1X7x459xwMKL-mT+573JKXC+9');
define('SECURE_AUTH_SALT', '5g61])*25P1][9E9_9--9jIf-edBLlM/73]4oCB8vC1ra~*2&4xV@7IqqE0tN4Y@');
define('LOGGED_IN_SALT', ')@K&F|;@650sM073~~:;E&e)~BE56!yOR52(4W+09A6erV!903apcupc7UJDd|;+');
define('NONCE_SALT', 'MPb&z)gc6]44L[;H7~[/6y152_048ef)P|2S]Y)jhZfblBrrCs#iuHwJG*Bkj6(8');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'MVhfnrM4M_';


/* Add any custom values between this line and the "stop editing" line. */

define('WP_ALLOW_MULTISITE', true);
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
