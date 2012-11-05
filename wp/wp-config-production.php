<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'women_and_tech');

/** MySQL database username */
define('DB_USER', 'womenandtech');

/** MySQL database password */
define('DB_PASSWORD', 'jMw3yXVok5wPwm2');

/** MySQL hostname */
define('DB_HOST', 'mysql.womenandtech.com');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'Om3A1-LJXF{}4):NS7+tc.VWcZ0%3-rXXj?}1EoqW!s(!m}[fU[2Q3tBQwWm_%9L');
define('SECURE_AUTH_KEY',  '{|wb?k?O=!PBO0dI#j~]KmSh1 =WF04[p;R2v~kru,%, }7VLK.&,,J+NHjlq`5w');
define('LOGGED_IN_KEY',    '<O;W-^+jzZ:c7?o;eZ>+n+S|-+`QK}WL~*]C}2KI*24%s~pJ&tu=$c<qhf8zF7ri');
define('NONCE_KEY',        'z/#]MznhK^y-R`sw[[T>Y(E|LvVHU|aJ~ag0Pf%l=7(BpNi69=vd@>Sb.Ej|Hq|d');
define('AUTH_SALT',        '?Jsb!_{R[b[:pR=B-W&]MGP=t+l*)j-r<D#-ac:0}d]1S BGY._lJ;i`op tjwe}');
define('SECURE_AUTH_SALT', 'V3hZ@f5u$xmD.D>XvzADJP,`i*<)iznIDSQfGC56y>[`rHkt|zp|U=.sRQEJ|$9-');
define('LOGGED_IN_SALT',   'X)DYWfN+>t2 V|HbEyp1%Zh5yJ w9-eX+q@4oo/D5B^jM3-?akVb|+~{FC?DTE|K');
define('NONCE_SALT',       '-GBIx^|+nFweVEdLK>,|TCY3,dm+A!1QS]Z|K?|:q~xQDe+#R: ~O|/rxpt^g)~^');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
