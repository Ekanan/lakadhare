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
define( 'DB_NAME', 'lakadhare_db' );

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
define( 'AUTH_KEY',         '4=X1a<n^VL/hx-[1+Vwyd]=R2JH-Y>90%mM3q:^voU,_R$PZK.dHn^?lvW@KuOxa' );
define( 'SECURE_AUTH_KEY',  '~O#-;L1Mc%Mp7=<a(h$no(`VLH314CDED.5l*3Z@=rLm(oUl?wt-96Usx#+$~e&4' );
define( 'LOGGED_IN_KEY',    '0hOj.C9~I^[DY?unvpdvwTGJ$vc^%N?fuNEB2%e:{aFisGqN(xC;=?)xa:JJ3#0*' );
define( 'NONCE_KEY',        'g#x-tT,?)K$:,2d8Y.=IeA5O=}}e|/>F! .`dJv.RY2PNxuRK[3,&|`0~m`R0K*X' );
define( 'AUTH_SALT',        'TPMcC^}+W3Jk!a.v8x:[gjMLhfwrJ$ OKZ^+@8d?bX$BwHCV*oj8{ 2oEO>7l4v/' );
define( 'SECURE_AUTH_SALT', ',p?{Z1]yHh`t(RTU_TRKyF]Kfy4s|fNcCqFy|61;}s{BX{9/_RaVQlR4/xL&5`@B' );
define( 'LOGGED_IN_SALT',   'jlLI3l99Fc!)p9~i{1+g&A=Oiy5h5T%BV*|9NF9)zEL&-3a-r^m%gb@]K`0q]DxS' );
define( 'NONCE_SALT',       '&D:g9XnQE<D:Hw_UTx=iJrht0Ks~b7O[cp+;IF?a=Ou{Kr$HF5KWe5g%>;h_AysA' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
