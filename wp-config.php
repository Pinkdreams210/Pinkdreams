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
define('DB_NAME', 'pinkdreams-shop');

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
define('AUTH_KEY',         'hvbvbn&~vheG|(1<+Wcq]38%!Ns(fT@oD;5Vf/[MXNM}*j8X&ACH?DO};{A!9&wo');
define('SECURE_AUTH_KEY',  ';oU-6?/UXT!),>xjUs}L%Cu,s;^kp]sSVgb;hiW1[3lPDGL5wFL4B|y:4i,(-)c@');
define('LOGGED_IN_KEY',    'x_*RmvpdTW[1`vM))v~5!]Kta-qUCFR.OT3s1X*wsgtK{wx`vIe[=4AYIq{Gb4R^');
define('NONCE_KEY',        '^Edg{QUl2DAj6IcZI8$wLA& +^{X##Ly{v@3DlGw!>XcM=RG=DCX*](bv@x9 > .');
define('AUTH_SALT',        'Dnw)q<BBnG_t(lj90_6Hsc2a+bMj|**7Xgzu,^]]RU;;D ~|LYH!|<zpoot0L#3y');
define('SECURE_AUTH_SALT', '-w&W{u}z]po0s,98I?H8RIPk34]yWd|N2}gOlR*!h3#GjD^z,9 1k>?]4G 0/](+');
define('LOGGED_IN_SALT',   ':*cRFozlK8$op:,N`7JGJ2DJ=g05<4-!uClS9s4KY$_%5eM@G=HAs+o, |v-mtYL');
define('NONCE_SALT',       '4d2<e=}`~)!.T3W+7/Qgp9!MC1,-vw4y&PP8dQ[4FU>rNL@o@_k;K~r]si4n0BQ_');

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
