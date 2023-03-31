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
define( 'DB_NAME', 'darimecom' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3306' );

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
define( 'AUTH_KEY',         'C  1bVu6t`*`gTt{I6y]F{D, e5#>@I:%Isc,~RO]SeO7{_*oGWySmGG{^kq;;hk' );
define( 'SECURE_AUTH_KEY',  '5E/m ,d$r3YMv@z]6&%Qg:TuF_%xu_vq#wn+xOiY1I~], w@o8S(T&JX/#,K~~1E' );
define( 'LOGGED_IN_KEY',    'jtcwWDbz}jYGEih55mzcg??#!n8={+);N5:pL0,WTLmJwQcqx(|{oe043wp+~T)r' );
define( 'NONCE_KEY',        '[wDR n%#6YSROA1[d|nFB(MtJkUlrZC2}y}t>D @]SAocs,igQW4S/MeH=@|7]4s' );
define( 'AUTH_SALT',        'J?;tY}la-6`h-U] J%.CZgx5@GL-L`7~&M@emh[(0l_q&*_Uyn5d %$%0WDHbje]' );
define( 'SECURE_AUTH_SALT', 'bFL0%N*jY#~CmA?1dQV5_bjmx8[;vxq:S&E[@*$TWv6KL<$jPeZNKq5OJ[*}9]gj' );
define( 'LOGGED_IN_SALT',   'E7DoV9+ph$&0)!6nP|Tm<5.y7;-qA;j;,og7>X?u4WR(p.{TItU8JK&,/Wld|?W/' );
define( 'NONCE_SALT',       'XD*5=a<>U43#M+T$wrZqI`Pe)qOmc.]c:YkLp?kG(1t~,*DI}0Yx Gm#UdrJQ#f4' );

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
