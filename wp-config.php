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
define('AUTH_KEY',         'i#7K`e[n@Iz+aQ!ov4[<jLYnJT@1NnFyFaJP2Xg(3g. h,*ZU5ok9rgTL5i~|Uze');
define('SECURE_AUTH_KEY',  '5gs:2]o&<]QvkNB:.sN4mIy/)j#e,A CMJ0db:e-&niIj4gYc-R|saf)y7TMHNN3');
define('LOGGED_IN_KEY',    'P_fj@.&p1;oTXBw9 U)t0BS%!5bjlZSW*buJ[ziC3p&I*eK>?}[Gy4-vMT},-k/t');
define('NONCE_KEY',        'b MixW&O(PjoNLu#/vvN5$ 8vC{w|CArg| lYgG13<mDxBbyPeuRP^Z~nFUpmK*N');
define('AUTH_SALT',        'UI-s/?aF*CZbj9iOftTmcsQvsA}mGKr~8_M+?*12yYweQ;*.u]-hKrDL4VV$I/Pg');
define('SECURE_AUTH_SALT', 'PMH@fpM;bkX>OiBac&#DfZ~vHvPQ!G{v&%Qv5a7H%H?3HT2~>(LbB[ B*SvNz03B');
define('LOGGED_IN_SALT',   '9&WY:=lH:MFrs4JF?|51o1t4lE|UySj+R&/~tV=D_t.f2E1tYA-P4Pvo;C#-$b2h');
define('NONCE_SALT',       's5C+c*fsauXdjc]m]E:dHAU<ttVy5yIU%;u|7h<M5XFdKKC*fiaw7bR*04R<w{c3');

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
