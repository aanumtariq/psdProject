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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'psdProject' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '74p4SQsi#nC%anSr@bZC93I(FsktRRv3qFc!DARLmpA76^LdZ 8HS880r?[qbV)I' );
define( 'SECURE_AUTH_KEY',  'S8C>7pih!+ae#?_:`dO]Yxadj16EotGpROF6<rXXa#YF7QbD{0HiV>|A)h!*N1Ir' );
define( 'LOGGED_IN_KEY',    '5/K{[Q4wn}#L5;i-/I-Li10h.9(<KXt%%5b)tHY`P8Txb-j{bs5J /ElDLC#IGM(' );
define( 'NONCE_KEY',        ']fv~;^bh,$OPt(O6e3u@`6%06T[r.T[oz+#H0[?kNW{|=ytNHy$!dbhxHqbmD^I,' );
define( 'AUTH_SALT',        'CXO;iZo[H@}6B+mMT7Ush/rge=#P`8/e}`:&d{aSiqBh_dxq&fy8!E%9!AwD|]@x' );
define( 'SECURE_AUTH_SALT', 'wP[x`[OA`tig>Nfo-L]|-$|fX[~O,*f<>UJs]5&+vMK0!k/WaipMom)/uJwFJ{UJ' );
define( 'LOGGED_IN_SALT',   '%TY7Rbt58?t8[+P,yFh:M<]dHG@L*,p?}~Zl;[O<Gx67AY6hTt)#X73b^sk0eWk?' );
define( 'NONCE_SALT',       '2Gk<-K.50*#QSo L+}/hJvx,J`jf+- T%xDweWYfBH#]CR5:i.0zp3}eh^&c5m3)' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
