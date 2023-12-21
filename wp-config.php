<?php
# BEGIN SecuPress debugging
define( 'WP_DEBUG', false );
# END SecuPress


# BEGIN SecuPress adminemail
define( 'SECUPRESS_LOCKED_ADMIN_EMAIL', 'hamed.kh2124@gmail.com' );
# END SecuPress


// Begin AIOWPSEC Firewall
if (file_exists('/home/mebcom/domains/web-meb.com/public_html/aios-bootstrap.php')) {
	include_once('/home/mebcom/domains/web-meb.com/public_html/aios-bootstrap.php');
}
// End AIOWPSEC Firewall
# BEGIN SecuPress locations
define( 'RELOCATE', false );
define( 'WP_SITEURL', 'https://web-meb.com' );
define( 'WP_HOME', 'https://web-meb.com' );
# END SecuPress
# BEGIN SecuPress repair
define( 'WP_ALLOW_REPAIR', false );
# END SecuPress
# BEGIN SecuPress dieondberror
define( 'DIEONDBERROR', false );
# END SecuPress
# BEGIN SecuPress unfiltered_uploads
define( 'ALLOW_UNFILTERED_UPLOADS', false );
# END SecuPress
# BEGIN SecuPress file_edit
define( 'DISALLOW_FILE_EDIT', true );
# END SecuPress
define( 'WP_CACHE', false ); // Added by WP Rocket
# BEGIN SecuPress Correct Constants Values
define( 'WP_DEBUG', true ); // Added by SecuPress.
define( 'WP_DEBUG_DISPLAY', false ); // Added by SecuPress.
# END SecuPress
//Begin Really Simple SSL session cookie settings
//@ini_set('session.cookie_httponly', true);
//@ini_set('session.cookie_secure', true);
//@ini_set('session.use_only_cookies', true);
//END Really Simple SSL
 // Added by WP Rocket
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
define( 'DB_NAME', 'mebcom_webmeb' );
/** MySQL database username */
define( 'DB_USER', 'mebcom_webmeb' );
/** MySQL database password */
define( 'DB_PASSWORD', 'ygI@QK03$mG+' );
/** MySQL hostname */
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
/** SecuPress: if you ever want to add secret keys back here, get new ones at https://api.wordpress.org/secret-key/1.1/salt. */
/**#@-*/
/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = '2AyXkHa_';
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
define( 'WP_DEBUG', true );
/* Add any custom values between this line and the "stop editing" line. */
define('WP_MEMORY_LIMIT', '512M');
define('WP_MAX_MEMORY_LIMIT', '512M');
define( 'CONCATENATE_SCRIPTS', false );
/* That's all, stop editing! Happy publishing. */
/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}
/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';//Disable File Edits
define('DISALLOW_FILE_EDIT', true);
