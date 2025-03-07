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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'rootuser' );

/** Database password */
define( 'DB_PASSWORD', 'rootpass123' );

/** Database hostname */
define( 'DB_HOST', 'mariadb' );

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
define( 'AUTH_KEY',          'F{mh#A%4(KeO7j&]{ELEK9-).-5!2cEZ-@*HQifzSTY?jt2i.SYPbt3ng&*# ?G}' );
define( 'SECURE_AUTH_KEY',   '_tH<>uI)p_f?1~-YdrLG/eq6D^N^{^063~DN@I|C6-$A+X{Yc@jjk[c50xGHJG<k' );
define( 'LOGGED_IN_KEY',     ':5_)/bK[MUL&zLpx|IUn+x({WSy&8}C)[}/Df+Y:{_DgV_:lUky6Avh`|CF#D?Q4' );
define( 'NONCE_KEY',         '14YZR$^A#XNaNG`+jz;GvhUZQ~mj]p=zJ:a:#JZ;`*9rEPk1eh, (p)5OG0AvT(<' );
define( 'AUTH_SALT',         '0td!(,p=R&wu.O:xt)s!ls^av=e3NpPOk1q]8`]N!c}gQ)44s>0XsJ~xQ^>U Akz' );
define( 'SECURE_AUTH_SALT',  'w14D/BsM0%%YGMguEP7,Ii_m(3{OIs)GYB.fO<3Wn;mgwpKe`htyOn1|H]%Wq=RD' );
define( 'LOGGED_IN_SALT',    'LS+U@39{v#ZCExb:G8zYG^ [/5Aoqh [1dhi1{GdRxr~/D6*oSnHp5t4;/Hm?4hU' );
define( 'NONCE_SALT',        '_N4!H]Ae&5@vSzT!Qv/R7{s-aWYBqpu/Af Z!`a(Z!Ig25V?,Stg{.T^0ZY9NHMR' );
define( 'WP_CACHE_KEY_SALT', 'vrQzYbV[&PV( u@=a-2q1X#pWSsON2(Ts;5sPs%qS6QMj0&k[mNGfz7f_p9fJrxy' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
