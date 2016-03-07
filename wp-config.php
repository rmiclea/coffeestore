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
define('DB_NAME', 'coffeestore');

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
define('AUTH_KEY',         '-OIgPppr75v,Vb6TghpH8u/nb)8xudW_]w:|#rtnV+-P87TIarf|a+>u/}TOw]-t');
define('SECURE_AUTH_KEY',  'nBMG]Eqe[_sfWV,2sJuSORaYY0tg!PLeG`CIn!MgU&8qj8M-zQ_EXrui!X[yh_wR');
define('LOGGED_IN_KEY',    'G}Iss2Q0>C06||Q[)6JCygv@X^|1k-s<rR]-M=5cr:9AD|V}K4.H|q(L45?r7m@s');
define('NONCE_KEY',        ':;Y%^6H3;@jhtg|U@*NXdg$+_b5rSB?xmgZNgU$8^nwVx7D3;mlatri*Z97~w.K:');
define('AUTH_SALT',        'A|JD?|q6_cz/gqP?v8S=E8W9L@c_F=hxBoH8lQ-|>>[X,@-vp1Q.-2WWy vW/b2|');
define('SECURE_AUTH_SALT', '^`!,|L!7zh1?/=K |hW_MTmjMY(E]^Fji#|G9</dz&EIE` 7 0%+h,vzVc%~TE-k');
define('LOGGED_IN_SALT',   '-P-VAJw~>jp(G^E-Xvr-*C3>ckaz-$g^mytXd{x$0zUXsRuM0#f1/)lNK$|t%/l4');
define('NONCE_SALT',       '{hX75mZE2j 0!gqI6;.f#Fj_O=)X`(^CP*fK5_yC`^eDeAA$E&V||X0wR<$/8xd4');

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
