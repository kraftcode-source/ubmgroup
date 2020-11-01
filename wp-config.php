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
define( 'DB_NAME', 'ubmweb' );

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
define( 'AUTH_KEY',         '!(0L@yr2.B9(BeTY{.SV:&0?LF/5JFB4Z9s1]-W8/<:/1l`dhlAz^dw&MasqIsT6' );
define( 'SECURE_AUTH_KEY',  'Vw/[P!#6,.pO&Z}4H!-vHl]&?}HO1TyuN=qj3=bxIJ9ROWmFxdR$hO*AtU_rG5_j' );
define( 'LOGGED_IN_KEY',    '6[@ +0GOPymH`1Mude2K%ICm}q2cl37#0E#s[~ Ew}I-:FH%Mg@R0I$hF.wtGZjX' );
define( 'NONCE_KEY',        'OIqe0*PhIrZOdzl(/2`)3wof,P12S&7nQC^}{sSMKU2Y2)u,;s8I}#L1X5c,0%)W' );
define( 'AUTH_SALT',        'XqnO+$!,2x0rGP3Qfae!C5oXZ+o~DbOF-tGK`4gF.o[m084H*QApDlMeo>nMsEF[' );
define( 'SECURE_AUTH_SALT', '4F` yU5LQyrxD3gD$|.~SD!8AQlzL+$vZQ!,SPF=RMO&]aMXI$G>C-Dkk>+;pf{>' );
define( 'LOGGED_IN_SALT',   'A,( ><ike@0LQYl:M#D?TJu@!vt)R[>t4D^cG6jhR<>D J=Kt|N?-)wnj8ge9Vz+' );
define( 'NONCE_SALT',       '0Y-dTs ?^XmT<0>a-T(_YI%fK0<&FGDNBQZX>6,y;r 2pId[|xK%_$xo3Mkb/IQm' );

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
