<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '-YeU9)jRK>Y>4];Pg^yXwYGyg(`U8mGj@[J,4;#s2I!6`Pw184Ojk[MtNaPo1k.r' );
define( 'SECURE_AUTH_KEY',  '0,O9SSzuh% =+:SrH&nC7qj>b^j {im1Xgyl2FQ8sq?Uu89X1vOQB53JRTlL7tM/' );
define( 'LOGGED_IN_KEY',    '^Z*1O^CTKtv=?ek 5rk~At)K`JkdJaji?;3]?3h+Uh!kup-pDU6*{VCYhA9|%d^@' );
define( 'NONCE_KEY',        '1bX@,SE<(azg<`4_eIYd}Fop8L?bFS6[j4UR]$Ct-Q.12{_b4UAk^{Uof=WvgWq9' );
define( 'AUTH_SALT',        'H1IhL0iIxHk!H.SPO^Vv~a;0<;5.c=:v24mjn57vAX29J32Ew6*K{OyD;P)Vz),!' );
define( 'SECURE_AUTH_SALT', 'o}Nj+//_@eJ,=CP%}:Iy%{/^c*s>PXrVt6v0$MC6/f%O-jy?k*zh)@k)X$K>t7Lh' );
define( 'LOGGED_IN_SALT',   '~2XLGV{l<}^o?~kqHhk:jm{J@,$PLON;|GNo6xx@7HbUBrP@ZNvfj&@Jr/XWQ%_4' );
define( 'NONCE_SALT',       'OZso0yWqE66v/s%xX<j7]P`OYYP/^c}^Nr92w}BuT7A`4,=M#q%`LX>$>vM9Y^hm' );

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
