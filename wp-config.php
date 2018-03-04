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
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'W:\domains\Ludafinal.ing\wp-content\plugins\wp-super-cache/' );
define('DB_NAME', 'ludafinal');

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
define('AUTH_KEY',         '2VSaG4(xSBB6dZ,=,3^G5M$dlrhl1{y1Eso9y=2 >pzJH=Pxjp2iM(@]~.>lJs.d');
define('SECURE_AUTH_KEY',  '`NC-_6-o@$^0v_5;0u5#;HkV=:K{wOGb>QfpGpoCyu@4xTB?Em9<=;|MM[u$,_4x');
define('LOGGED_IN_KEY',    '(!tD}Zqbym&[:?Y+Fr~J!t@FB4^*M23z$-6|GGi3{`xwd.=mprugB@{_b+FYCbgG');
define('NONCE_KEY',        'pu3G=V<wB NctDGO!&Ry}PC$N^|sxl!f)nQ2Xqr R3+I:@lo:mfV~i>.RQE@*GKb');
define('AUTH_SALT',        '0<bC>?|>A#+(&F0OHuf5n(j<qj$Qe^P:yfob}H|a{{v7q!}n98wu]/61Gr/0i${F');
define('SECURE_AUTH_SALT', 'IM8c4GN5BlFp,:i^oWrJe_/Q~%{VUNd|jPPir>Fv*-4!z-&5zW(~,h?s[gQ>RG2B');
define('LOGGED_IN_SALT',   'Kj.1@>)3,N,b!6<=0+<E7F7NKkj&[C;C)Us,r+Ya#b{3R?]w>BG2rgp4Du&!;w9U');
define('NONCE_SALT',       '@-=s@ N-B2<Y`szA$t89s4a,k?q^u_eTi=PCJY$E?e`J045`p/W7}[wmVsn|9{;4');

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
