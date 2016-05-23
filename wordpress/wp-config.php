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
define('DB_NAME', 'wordpress1');

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
define('AUTH_KEY',         '+R=+P{:eE]7^*fe/tuoT$O*Nq$jBN{bc<9I^bp^?QjzX#e4C5%8^,Gqw`oIA*nL}');
define('SECURE_AUTH_KEY',  '&lBvRE*>5jHPsfpj/F V`Gzl[!;f+5g_<zwNL#$O}5IQL*LDU8${TLN v3J3=rJZ');
define('LOGGED_IN_KEY',    'jX/=/@U:Zj`fUpiG]ge;#XLKs_{IpThI{J{^WbcuT_<yODO=t{W]ZqgV`?lp7z-Y');
define('NONCE_KEY',        'uKHVYEup?~BoI+jTF]Qskiq=)]1|Sq&f+3_V?D6R>=}LBeO=%{<1b0LQGheT,z8v');
define('AUTH_SALT',        'kg{]7?:f@QUv0D?8,i5gyU+F[Ugiy#7V|rzL E8/k9 },98yeB6NJ*!^$z3/5*Z`');
define('SECURE_AUTH_SALT', 'g8]~XMmhv6`%*ifgmQ?Sb1Wm1VdMhjKZeL]~fxdj2E<m+VMM5R|=Z.d#iC,,8kJo');
define('LOGGED_IN_SALT',   'G*G*<3>{B24W|]YIycL}SS=~E3.vNuM)N5/WCGm.Qb=L0=^DLJ2+d%9jE|L~ $(h');
define('NONCE_SALT',       'O2w4X<ISCFl/ttvHv1A ~1}KutkTO$Su]s}Xr~j@1=Y/s@uppYG:[gEn>m%yY@?T');

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
