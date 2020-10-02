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
define( 'DB_NAME', 'wordpress_db' );

/** MySQL database username */
define( 'DB_USER', 'iyus' );

/** MySQL database password */
define( 'DB_PASSWORD', '#Rendra2306' );

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
define( 'AUTH_KEY',         'Qo&gN,w8(?t}lKZnNa+n9o){-=TgqS&9C;*ssACH4-HQ`B$E[@T~ kj#kP0P76{D' );
define( 'SECURE_AUTH_KEY',  ':~<,rs#E?2b=>&cE:,;(8_#34+utiGo<SRgFlbDI!K+>-h#{Zyb62+zTrdR+1u:7' );
define( 'LOGGED_IN_KEY',    'e)!R:YZsbX1e1{~LWdoQ.tx{;0^/`%crq1WOJ2|E(uuRD]V#lIY)RMf`/ Fx,Lbq' );
define( 'NONCE_KEY',        'k@/T`Tx8Ej==cIr :]p+c.*@#tpXmKd#4^{~J>uC%pjW1(qTX(0k#QsBbjS2`i9^' );
define( 'AUTH_SALT',        'W)W/CAh0J#NI# Q3F$v}RR6(r#BZ13~ivUyo`vOb=E)rxQ<#DvWO`;(xU=LK1+S@' );
define( 'SECURE_AUTH_SALT', '|;3O,6EX6`y&Zg#Pm4yyF$ak:)Iq{K[<(+_*vX.ML2H&F->YXIA)*Q:$EHXbT_<`' );
define( 'LOGGED_IN_SALT',   'rtqPS[yVZ,9,(6xw,fI,y[(,m4zDRZ.LF7::+9t}oG NN.JSy`=vucb,r,ukWXI7' );
define( 'NONCE_SALT',       'gaoPYd-u&eFsRP4^RH%<xCJ+Fn^6qZdrkjx%g{=?PLK4(Y}r!xILls6O0.$8bfti' );

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
