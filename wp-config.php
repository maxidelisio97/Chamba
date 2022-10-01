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
define( 'DB_NAME', 'chamba' );

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
define( 'AUTH_KEY',         'Jb<?p&+<N@7=57McCpcg8Ut!dDZ?>X5|IZ9|h4zIm@*Z6p/y-He*m3F];ce1WZ`I' );
define( 'SECURE_AUTH_KEY',  '&KixzUvlgHzL=u gu1*wjr<`k%z}U${a1UahBN}VLuYE:NIjs[:kHD]We7;ihU(3' );
define( 'LOGGED_IN_KEY',    ',:(]{5>LRH~x.@p;K!D6*BLL#6A#iULN|DY]B3W:(W=cn}S=@Bf5S58k1NxDQlc2' );
define( 'NONCE_KEY',        'qt/=2aZK7sy2,~8A$srRkdx edDj$5MWN;38p$?6R(O.A948#fwGRC e{fe^3{jA' );
define( 'AUTH_SALT',        '|ZnI^pdKcs~p[MVbu>^-f?Y+a$i}?AfVRmN]|4(f 7GU#qZd $/CchMHqdU~[m/u' );
define( 'SECURE_AUTH_SALT', '?^j+}Mm~~OkGV+tw=utUo[E=*<d2YK%}ljnP!uc&!FS;L?q`8D7fnFoxg#pG.u,C' );
define( 'LOGGED_IN_SALT',   'P3w`~+,hSoNMcHk/n1n~,{$y-g!L{m[Z+*eT%Wr~wwglAe<K2@e)7+Aj4l{i<Jeo' );
define( 'NONCE_SALT',       'Ol{<9x;(6:J)LZ&[^9(TPBQa9D~A>HboDy9+l~%u%~Xgb~0Cj2bn(]%PP@T{VNQJ' );

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
