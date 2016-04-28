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
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'mA95/$/}Wwn32mE)?JxQi)M6Xi<!~BR8$d+&Fs}5rxs8QJtOlj%=F!]}qfmIwjg8');
define('SECURE_AUTH_KEY',  'z$J=_C4)z2aPPb.N&|k h$]<@)FubJ3}SVhOUNA3Iz;9bPiq}2 =eRgdnR.4Cw$4');
define('LOGGED_IN_KEY',    'X]N2v;lvv$CHM/koLMv W}j2PSZ*.5hhM2T^-Fzw*+X,#n !#<vhk3nUbRGRHt[m');
define('NONCE_KEY',        'ih]((xj5y_pm3Vg4QOTWr~^ #lIu0]czb&/Fv2sdONWtn,k*]B^B,0,aFy/-C}hs');
define('AUTH_SALT',        '8R5Va> -_ Oj1Dlg<8G?TCc|G/wx|WczD`T[gxNc0%e32-slT00-Q3mv>t8Ig2su');
define('SECURE_AUTH_SALT', 'fcg9fZp~uXKSO$xKc5A<d`5|cG&y._B%|wIgN#/<R)WZD^L<u&5GPp8X8H VZegy');
define('LOGGED_IN_SALT',   'DFkEqayDy1|vl3Ii+~?=fxztV0_R})|-`RiH1|Qn`~n&kq[|K)WL)Tn[/TmeIO=C');
define('NONCE_SALT',       '3iDjd+B0+}Zlz3;]ZP5}JwU1*7EW&Fwa7v5XTMIgV@6xC^.14}hDB]^5G-y >JSW');

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
