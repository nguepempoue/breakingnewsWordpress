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
define( 'DB_NAME', 'breakingnews2' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'K78(djkCWORdO/l+Zm_Md&+3RZ5@+#j}a0@{k=P5/5xrT11r673w?X+N$^,Rk){^' );
define( 'SECURE_AUTH_KEY',  'UuIxU<.AFDp`iQNy~(|{J7>m}h/b`U:$yBP/q!u0&diPXs/dyn#t050G1m1L@P`i' );
define( 'LOGGED_IN_KEY',    'O}2FH^5)i$814lGnK9GY[;,}P6h$gzsPRQn!yOTndI:w+NoAKRR;j3<qs.GeA>7.' );
define( 'NONCE_KEY',        'evr,A?rMb|zGo|D*D2L(^neug6rx7&,$]@X;m%Op7-(O`rT*F9X2Q1NV}sX3MqXC' );
define( 'AUTH_SALT',        ' PT_pf-aB;;jo579aZC 22OiHV_{V4j/I$MfOPyY5a*Q&>W)77oLH(bP%V5;taK.' );
define( 'SECURE_AUTH_SALT', '/k0&3c`Ze)B%2a+`0)d?_f5EK$NT(4]0XmyYl|tQftkGg-IT>|^x}g7}U|3@IC;}' );
define( 'LOGGED_IN_SALT',   '[p1Ll.0.c]vK9!yW)uc-fXrk73!8FgsBiS<NKVgtF^arTC)tdCZ<wGZ^Ivf+8N6(' );
define( 'NONCE_SALT',       'PS8{SKw;.:j&CucCb_[/( S*@(EsS- `#!_6U-[$1[dLOp%*6.Qq2|b^cb[N=R2`' );

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
