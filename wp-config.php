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
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'P?b `MK:;zaXTUq[/<K: &Wyd7F5~7qc)nPn`a#`t/!{k2:$#shyZ{+ M4?ME>Is');
define('SECURE_AUTH_KEY',  'gHd;Dwo2rpvzaodem)P,!3^Rr3hDD8<#n*q+L(&D7aR782I^ug2m)}}W3p>4]Q X');
define('LOGGED_IN_KEY',    ' CS,AsUa#QGDcSWaO0[sr*8n0>2E SKRs,E-UY+,ex([)^<sQd<>j>}p6 <W;yCj');
define('NONCE_KEY',        '$>eRJaBil5<_RE[^q+A;XF9vK4$oN;6B(NQ<|`k]QB}n!VZ7aWMl!Vo77G1U2}`n');
define('AUTH_SALT',        '7)]-|N fujAbTlsJlPC/C_t^)YBw>j)&7<8@E~Z~,0nk1d2%s}=1Y*39oo7QsN>v');
define('SECURE_AUTH_SALT', '|/ Dg$6|>89).f-eVG:4-ZK}fT|(H,!=!V{u*S;c+ cKRnliCq7<#v?7oVco>k@[');
define('LOGGED_IN_SALT',   'h64~W <%S^+SY9^75,PDfmX,T xc&YPCu35@=W!B^<fVBCq@:H|X6mJpWf|hrT)o');
define('NONCE_SALT',       'Ac_==5k0&qY;C~N`Tsq~T5SlW]</=CC0/4y~5OH4Y]VD]5gR2rR/(}+d0+[db%B)');

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
