<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'rusa' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'H!awn_bhYkn]g[_,#<)lz=?Sg s{Q6^[ig%5#Dx}/xdu,w4/Eg@t$m[@iQ{&-/!y' );
define( 'SECURE_AUTH_KEY',  '8=j=}EV1kMp^n-~#o+ier?//j&b1(WuK`O%GW$O|*GbvSPocBBd(4~GfK$}R(22R' );
define( 'LOGGED_IN_KEY',    '{4(Jnry#Q!xipE:]9m;z@[6!.s],%p{43Rou-~ra*`)+>KQo rq^6Yu#<tN_Z-zU' );
define( 'NONCE_KEY',        'IyYBQxATUW;j|QE^<L_bHo.bR(hUG6zA[guV,3bPq3`(p)x7Pu-N9!tqsDgoysK@' );
define( 'AUTH_SALT',        '*?iQ^/t!Fz6Elk k{9~SxW<!HUO6Q5D5#V >Yh|(h=G{].GAHr[]RJO~p]GQaRrm' );
define( 'SECURE_AUTH_SALT', 'Q*&k{;Ggm[D(m6>*,i5F <17gP8RBAA[_x_`s}_}}EdV>Um9BMDqlx5;Tt.@gk08' );
define( 'LOGGED_IN_SALT',   'cRG!:P^aeE$6[P{RAYenUqF(`NY*ap-z^|,)yQX#S*GR|2LP~s|B/MN67E;y7 ZM' );
define( 'NONCE_SALT',       ':(-AX>s65n#zg/BSJ`M8J~7spB{{`ipD<7qFp1`(oucMiNjfXQvbH/eDp=#y!g&o' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
