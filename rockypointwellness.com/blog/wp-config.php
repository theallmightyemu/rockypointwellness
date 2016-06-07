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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'flightless');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '~7z(#|BXAEa552Czh=TR$xQ{IZ83<Dp}y|EnR1%K4:+%b4n/!3cXH3VZk-49&w9S');
define('SECURE_AUTH_KEY',  '[j{npdpqVm#xcZZ`|++ U_7#G}_cR0p~Hg4o,Qgpi#1@ZCU&}YLV+S]m+1gs%||(');
define('LOGGED_IN_KEY',    '?;n[AX-r2~du*v#wE-LfM6~YO?x0]mt0np`r}WI9_Os4;Ty^.{ 8f[^TqDl>fJX+');
define('NONCE_KEY',        'd`y8=&@0P |7[ZrkFRX$+}do@=oG@0K%:u(%4D5Ufy9j<lzDZDv_3fH8O)&+|PR&');
define('AUTH_SALT',        'ZIo>jI!6T|p(9-deNcyAb[eLEp|w-Qql|TB!;{Wgp$1,UGZt7Lv!--lUpk;.pjJ<');
define('SECURE_AUTH_SALT', '~6cp1zB*}-WyI~cpE2#$HP@0BK<L3skp=.O8hSU$dKK,P+U6}oHR%4=`=j{-u4@i');
define('LOGGED_IN_SALT',   's--w0CMBGMRN+P1iv.E;owEY|OW3yVu@hP[I{|8y}Z>I9TJ:w3X{#@>e!yZ-UP+E');
define('NONCE_SALT',       'T(3BXb}*Cxc1PLG}_&lv>MFlpZ(w:h}P8_2JdLdw?`OEG3^;21k6i+4%?<`f/Y>t');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
