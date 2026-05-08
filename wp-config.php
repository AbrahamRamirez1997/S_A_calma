<?php
define( 'WP_CACHE', true );

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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'S_A_calma' );

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
define( 'AUTH_KEY',         'lORg`+%<Dk7BX%Ey6@B4p;|Vk*^cwW-@r[WdQy350T [c&}TlQ+?)RZS.5 =}rY/' );
define( 'SECURE_AUTH_KEY',  'k9Mdlk8aF`%gfL-+.dzAMqS~8HG+GW,E+@Z[tyI7,-;&3OM~% )/kNn3ls,BS]c2' );
define( 'LOGGED_IN_KEY',    '09% llZ~XEiaHN;L73C75VCMWTU9<qw<p*rRwH)s^#>}G==H)%8jp?qGF)C`05}P' );
define( 'NONCE_KEY',        'Rk(1v}T*<hMs*;&A29{3yd fk=t7R^&K>l| Xm6l9a!mBrMxStm0HP*E)S%E<^C/' );
define( 'AUTH_SALT',        '3}@,y)BJ0-7nxPg8y:9E=$a!ha8|89h%GS>Wr[Xx#_Sx2GxIpHn;:<I ]ESD3Hw(' );
define( 'SECURE_AUTH_SALT', 'S5eMYcK#yV{%]ub_y*B&3Sm.I#iB?s}p;N<4Gex^Bf((R&p3WQoWC`]nhYzI&;&*' );
define( 'LOGGED_IN_SALT',   '7S(E oya*&a(FOjRx>?bS4(l|J+;~M>5a47w1 JsTBv@XXEguHhtE7g%J7aS;}zR' );
define( 'NONCE_SALT',       '!0J4XoYo5hH%r(Nv=kc4xH@0^YL^OU7W[1B3UkO:G6Yy[?5#jJ=zrCOL%jc:*7oi' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
