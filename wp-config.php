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
define( 'DB_NAME', 'novelt_db' );

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
define( 'AUTH_KEY',         'i~x:;W~HY*_jZV%21-Dsc(S9zyZ^nT,9w%N9OK/P%)V6N):C)gXHe;V3iZ][FWs{' );
define( 'SECURE_AUTH_KEY',  '@NUogTJkM#IjG4~Sqqq[dKy:JxFPL}j2[$`MzFCC9y~X7G;?u]P|]H.-V1^U2-iW' );
define( 'LOGGED_IN_KEY',    'CKEoH8K:KIMMZboP-[F.~}FkYORjVSF::Wa-* f_:0k>:x}L>`fWG{g5RCPD>=EU' );
define( 'NONCE_KEY',        'U8]8Q-mcB3v2Q:7ol`CMY)6,q{#dhEiJhQ<WX4N(N&FO]z/r42nn;p/h|<}tn9)o' );
define( 'AUTH_SALT',        'is^U$HTz1 [yId=q7Z|_Z)5<Ip8_pE&+:9Gj*Z$eVI<%vG:Jsx;atEK{]+>c??+,' );
define( 'SECURE_AUTH_SALT', '@I;YQlOdYugLj[55[4R5AECRs.=tfspFR0)B ;<KcO%)L$1k9,/YG1(^9uB-G^%3' );
define( 'LOGGED_IN_SALT',   '@:kt9 Ftmh7U!V1eFh&V]b_R[Op^QB2/aUa7~hVng^jn5S[Au@]A;mKa5_UrM~5a' );
define( 'NONCE_SALT',       '^F_d.$qUr!t;o^sBl>q4^L>]f-a!J2[(#o^as!E6lBNnBjRU<F1CtMDQcVQ(oQ;L' );

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
