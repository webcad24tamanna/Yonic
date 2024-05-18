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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'dit_practice_yonic' );

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
define( 'AUTH_KEY',         'kalc<6:NUi,>D/Ubqhx*1Xk4{|KymL~q:Lgoo!}2=5m0^y5mw6i3^ kNw!Z4cO~]' );
define( 'SECURE_AUTH_KEY',  'fWfQ-SknH@UgO@?OiXVsozw(^z!Wzlif++Ay?=A774H~6p||+V(Gk,Sq3` c}l.B' );
define( 'LOGGED_IN_KEY',    '8z&$d(v0Ki]KrA21|Y=P#(O;6 iVX)EFiiVjS4p_4:kq8Mn:6@re=W2H:)KxS<2T' );
define( 'NONCE_KEY',        '2Apg{5=H.ib9SW(RiXhYcQi4{0M)H~XOr0)7%FgG96QuYoo),Ajgq@77rFLUe#}W' );
define( 'AUTH_SALT',        'MFt.W=$Y4Xt{8HZ|b!2YxlnPNy1e%V`4D)%p?s?+vvK<AK3W)K 8b`#LRn>@Mj;R' );
define( 'SECURE_AUTH_SALT', 'Bp%/baCJ5[&hfR=|p!lQ4*}mF/w]SbJX9kIq%d(x:@U|(m!BY@tR2l%UL;]i2H$&' );
define( 'LOGGED_IN_SALT',   'TBr(Sd^rfm[+d]P4h <z9oM l[q)#DUca@zpH.:b.0,M0N*-fBQQbSInJ=7FFa/L' );
define( 'NONCE_SALT',       'U;FL7jAGsH`ZBg)!I*jK(bC0Mx&se8,~@}+fyFr*yE$YYm0y&X)|t%`6sa5@SD,[' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp56_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

define('ALLOW_UNFILTERED_UPLOADS',true);

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';