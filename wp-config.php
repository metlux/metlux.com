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
define( 'DB_NAME', 'metlux.com_db' );

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
define( 'AUTH_KEY',         'xpu)Z|#5Uy5Rm2B%#hgd`G4>6_A[mfMM$(iRmxumV0Y;9?{26a6 Ldz~81sqZ{XF' );
define( 'SECURE_AUTH_KEY',  'f$QTB>Q6_jx.Z.z.9-4gDUGqUP3$Al%9dSCV<%G&sZ][_7lea?1|@ZG@-zR#-V 7' );
define( 'LOGGED_IN_KEY',    'bF!:iMc:@*U(+:~b[9qcxSnR0#Dcvj8U8PHCtQEd-1QGOGp/5HDOJ|5!*LV=uy{*' );
define( 'NONCE_KEY',        'h$#BoLw40+w#/0&{&zWvR,fSTSbM?tt!-uOMmib1=KPY)rJHV:p(&o}PKbm`r$6v' );
define( 'AUTH_SALT',        'oy6T!u_T[q{Lpc{Hfk}cdwc(t34*6,6-zdOebC9&-jp*mH/|?zTvp`p|P,,P)X]^' );
define( 'SECURE_AUTH_SALT', ']hOPBlRdqqb.r.p XC5z4=G_iS>u-cVk-7(s;vk|5Q>3x{3QlW=cxY1jwxrF_-YT' );
define( 'LOGGED_IN_SALT',   '_KKXfZ2Lf` z5qk7.Rg44gRL>PO}@Z6PB2r|l8!kYFC>aPl|bMmK+k`x.3AiDof4' );
define( 'NONCE_SALT',       'KCn373P)9ogR5P*]e3a+/_uN9(GGEhewLIxsf:1E6%)k0ze;*oJ0URVcJEgutf7+' );

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
