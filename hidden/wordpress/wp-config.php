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
define( 'DB_NAME', 'wordpressdb' );

/** Database username */
define( 'DB_USER', 'sonusahu' );

/** Database password */
define( 'DB_PASSWORD', 'sonu9754@' );

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
define( 'AUTH_KEY',         'JtH-0X!~|v#kS683Cq(B*a(!;(lG`z5t&x?Or=nipEF%2XK/T:Wr$zQp*1N(bs*O' );
define( 'SECURE_AUTH_KEY',  'e%)&D9AhhosJZr>},@(;A]|RWJMfEP.V]}UI=2:w82n`mDUwA$Ihb[]BW*{ilkB=' );
define( 'LOGGED_IN_KEY',    'SKGtCe{nWs%Tsu{xJJ;nzsTf:q[=ovo=FfhzqjW;f,F}@EILp84wW$t cW{)Q+q=' );
define( 'NONCE_KEY',        'dBZ,.?BVXFTk}8>{Y:ctUTUw~B^i$YN/SUQxma=8.{7eDcDOhJuB>QXD^K#is&H[' );
define( 'AUTH_SALT',        'S7;uchoR1g=0-6QW_}*g(KhiZU1KcenQN8n2RC~/d:r_}55Y96PfUY;V$i(+axN;' );
define( 'SECURE_AUTH_SALT', '231j6^|ETd8gL32@gYJF%1Np{:a)BUBJ./+gP)}IXE4Q]B]zLix!+?H92!>>%Ufb' );
define( 'LOGGED_IN_SALT',   ':/9:w~G+.iQr^yJ*n y0q|YL>2k{FpP}_eNWjPCdT/[a4{ky<}k/zd+Hof+4~426' );
define( 'NONCE_SALT',       'eGg%5.ZYrR<<H[}9UnM!_zGgz=zsxv;.Lb*[nc?~[=u<_H&k+0%Q !S8b3bU|_~.' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
