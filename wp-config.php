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
define('DB_NAME', 'movies-test');

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
define('AUTH_KEY',         'yf5MD{5};AH`d_Kx<=3/C0cl .wEZ2zjg-.[b*y{>rtR#qt T|hEI*-Kbx[x*OP2');
define('SECURE_AUTH_KEY',  '[L58c%N;B2H0!cl9;p(N26(vfBq`Me2jYE?-d~WQ4T.$BLHaz*9QF!O$&_G9w49D');
define('LOGGED_IN_KEY',    'rAW4*H8T~a/9D1#wV.e<yh4^aEV!~m Ln(klTd/kovRiW2u&Yt],e=.Ske&A(d<Q');
define('NONCE_KEY',        'z,UT-sT3 *lE5:jnWUEVxK|EC3ZyrpdgJf9R.Q{]}x<gy^]]]OGcByu};]?r7!qs');
define('AUTH_SALT',        '@0h>G-C~IFm=b-jv}?9+](E)XujTj3:99/gIY35a@ H%|b163iRNWB<UX%1I@w`J');
define('SECURE_AUTH_SALT', 'K0=>=M`/U*5#*jg5[{-S8E~>t]j]lLDH9 -P>A+dhdy{Nx:c$tAfto,5xsUtQD,.');
define('LOGGED_IN_SALT',   '0nE*0wR^7*i<*,]*z9R {wGVW 1mtgX2tG$Hr8?gz8e5T4h,U`cu3sH(0-Q#@@zk');
define('NONCE_SALT',       'xrB.F*MiDsrKZcxgNUcaKZ?4)lN|@<=O<DU6u01do|^O ~;F2[>)BVcEy1[(kN1:');

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
