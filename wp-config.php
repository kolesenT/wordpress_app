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
define( 'DB_NAME', 'wp_app' );

/** Database username */
define( 'DB_USER', 'homestead' );

/** Database password */
define( 'DB_PASSWORD', 'secret' );

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
define( 'AUTH_KEY',         'XIcz[rj<4o,+E((GW2{({.|@d7<6:N24k^/QUFHH,}R+fD[^<<o=d+p`@P#49C{k' );
define( 'SECURE_AUTH_KEY',  'mdBa)+BY7z(^9z`IsGk4t?)[NAweATmR(k&M,6SR+ld:Cl{la<}mO`WWw@XiIJ8P' );
define( 'LOGGED_IN_KEY',    '<RRHWb/>gECoP~!j.#j!kxJWFY*;KN!JL8c #]gf/P1[w[#:uI<n.=9dHs!!!&J[' );
define( 'NONCE_KEY',        '+Yo/:-4Hk<hM 5tt0~lA/>=_(M;KIMd0XnOwj^H.3Uem6LX$Y+Bc-cuO[#hkr-;U' );
define( 'AUTH_SALT',        '_r.DNI:7<%5mF6UGOCSnu.I;- [.Za^T>Z//YI*Me~,Q~UOJb1pQ%wj?N&]l..fw' );
define( 'SECURE_AUTH_SALT', 'h*kKq!m^h:QVMg_[^i4[x!B*}N=$8?0 mid.N[;~p^*@|lkimE.@CZ]<AB@(_<.1' );
define( 'LOGGED_IN_SALT',   'B!}5@c?)dKT=lqALH;/$e+APmCC:M4>(C~I;|GeDYb!M!|t{LE14~|uHG=KJ{FLS' );
define( 'NONCE_SALT',       '6Q*j~[[ J?nwK|w[vN23y<rllD|<)b8T@|0v^w;EbKk*S%>+]bI0sqq#$l&~qh_3' );

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
