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
define('DB_NAME', 'lars111_xcountercom');

/** MySQL database username */
define('DB_USER', 'lars111_hemsida');

/** MySQL database password */
define('DB_PASSWORD', 'R4ggeCounteX');

/** MySQL hostname */
define('DB_HOST', 'mydbb8.surf-town.net');

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
define('AUTH_KEY',         'XwQ*k`9+nX58.x!$csjkY!=pd2wxx?|!(HBNO#J_ByJ$5gMjlgM&*LhtRAdEV:Sd');
define('SECURE_AUTH_KEY',  ')4h_%M9&||rWmlmjyKAy=A1_>=45=m2`JLSS<rb3M+9u!%CX%%`xkdIKggkr8r6T');
define('LOGGED_IN_KEY',    '3KK;>FW[#XRbHf&6K!wr7Z/D*=;#K&sVEL53@`J{T18s#U^7TV(G(x}}{[Wmd|IO');
define('NONCE_KEY',        '@5L457HJg|l^aJf$:M,8*ig}+`|8&cJ-pj{,G [;WrSe_*3Z+m|eE.-o.a>bc!7B');
define('AUTH_SALT',        'n4zZ||7wl%AnHrN.L*jPS-^}Hs9@12iQzn.v&TGQ2`WN%qH/CJ/h~ZQh + vw|aw');
define('SECURE_AUTH_SALT', '2qDN(I$065xL^0yMj7ThnLf^c%B:o.GNtNh5Z=oj__mTp^Yd{&5STF}bjVrP#H0 ');
define('LOGGED_IN_SALT',   'Ho!=EK`=aG85!-WSDt tbAoN2f,7c/4%wN!a-x6Y-nz+OeI5<>q=D nKULtg!tyC');
define('NONCE_SALT',       '{/$~>-_L]y2#U3y]%N)a[oDi=x#R%y^f??7HYh@Lub}RQt8.F~3|cb!^|G$+>+^/');

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
