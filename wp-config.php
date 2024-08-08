<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wpdatabase' );

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
define( 'AUTH_KEY',         'og?,lB x,Oq_M|3CK}^7|w;RhVv+zRyqkh;i._5lTm<$<<58HFJ[Z!LBRK=B[QNL' );
define( 'SECURE_AUTH_KEY',  '5|.9CeweniHf>~G0ts[ri<ck$+8ndk?Iz/pBUR!|)`Uu+;4!H _KlpH1lR!$nQBD' );
define( 'LOGGED_IN_KEY',    'InPp!]E-1dyMb=f.[~gv3bgk%KKSq0H)pe$meq])wBD`I&9C{zHI3K*q~-@$LzNZ' );
define( 'NONCE_KEY',        '0amcx/n2K6wAF{f)qfSGzm=WWE(?iT@Ru.Q>?k@72XSK^E)Lq1pyl{(v@)z_p5sZ' );
define( 'AUTH_SALT',        '_kY6^.T!<#D9/_mPO_4Zi @$%f[LU(sH/m)S[CpV8eMs3LI$Xyn_qKTz3b_)N(q{' );
define( 'SECURE_AUTH_SALT', 'F|0oMRIrF{ZlLFEiHAd~Z/Q[W+b{.3]O1GP>aG5kmh5m_H86K?o(@#l5xi/}:7!/' );
define( 'LOGGED_IN_SALT',   'rwv1u7rTL8/TO,o:<ixeb/Q2>&[zyHSJ]!ZLadJ&=,.s`u8J@XLd[H|![<V,Z`5x' );
define( 'NONCE_SALT',       'n$h9LB3fsiY;~9K[[.F1IJg W#@Kev2ak;U&=X%*t_FuPDbl?GYgx<QE!4?]2~Z^' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
