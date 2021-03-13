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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'jX7:q%@<K,:n?Niu:^_u8cnH1hw%9Ta! fuK_f^2pDPz>O`)QSu*F[q!tw};KS3[' );
define( 'SECURE_AUTH_KEY',  ')~s)F`%_n dv:`i9RKtQ=pc>&FA!!(.k o6yI3>-CV-B>z7%i{nf1$vn6?`MfV>5' );
define( 'LOGGED_IN_KEY',    'LlRRK6e(:1%<.WDR!GYT|lu{)@Ts~UBk^/9kPG}CR&q~=4PArR}f<TXEX3=?<4_X' );
define( 'NONCE_KEY',        '_{lcNNGc37_~[Uw/_h!>0tNxPf/ sHu3ldaK}M.NZ4%]m`[F#I<_V`_$R9fUL]Mr' );
define( 'AUTH_SALT',        '*eSzB=#iI#t3v6/XG+8Wh_|b52U|CqF[7I1DcLJAKY @eAojq/~oErJx9}Q`k$db' );
define( 'SECURE_AUTH_SALT', 'IGz*T<;<a_@Q~nGcf8GUE(x=HNV{D,pkA &.BIZA&P<NCypkXfHP`,RP?lF{x5S^' );
define( 'LOGGED_IN_SALT',   'W<WvW77W3%bfPifb<-,NQs/g=2+]Y(v1uTof1>gEI`fJc4Ki`}gqtLI-l?A%d[?1' );
define( 'NONCE_SALT',       'c=;+N2,kYGiN4hFFsZY@6G/+ei!(1r[1A>`K4R[WbF>WbUI0SfOfCRV@?&i@6{HO' );

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
