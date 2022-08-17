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
define( 'DB_NAME', 'MyWebsite' );

/** Database username */
define( 'DB_USER', 'nushrah' );

/** Database password */
define( 'DB_PASSWORD', 'MiXiT123' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY', 'Kd0Gk >MBZCA?xm~&N`9a$V|k a.|t)X_Z+9bVu&,FIyrDrQoy@(y_-/Z{E`3*D?' );
define( 'SECURE_AUTH_KEY', 'skP=6fKx*A--cpvQaDTT+RB[mS61/!GbKXU.g8Uw*}V=?}R+d.t=C8( A^J2-T9i' );
define( 'LOGGED_IN_KEY', '==yYOOSSqz3[;c v-F1xbyzg%4cx_R/mjrkwhQSAHDX@]-I-+)[yDmPa&++v9l~C' );
define( 'NONCE_KEY', 'M}=]-t;[9R+{!p{a:Kij3NUZ],jPrjnHAwH^wuQOq@m,{%h@Ll/B;?j262TB8p36' );
define( 'AUTH_SALT', 'L809+EB.n:;_3}oSK5W*fBE|Ol+>z=c}P+!yE|S= |jBa|-z:22e0K_~XT5`tWwf' );
define( 'SECURE_AUTH_SALT', 'w.jfv B-zCW(z[|~s%rGODIGLi-wDokC2d_VGX7`h;gYx~LZY2f6>r7vc&uo$Sl!' );
define( 'LOGGED_IN_SALT', 'd8i4uovv<0U+H42vo7!6o 8v3vb|,-%3,`#^.M~lWl!g~kqTR/53xl~qG&9dkVSr' );
define( 'NONCE_SALT', '$R$@Y=W%ptznf!/h-(G+Z<,I@0]-w[Zk4;Cj-lX [PXY?8_Ct5* *SQxCoE!3Fi*' );

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
