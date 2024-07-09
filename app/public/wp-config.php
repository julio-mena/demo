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
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',          '%O*HOIrDBxuC~_(%V<x&wt,;cV.p?NlQN9z-|XL]EThC!;3T&MDu3DhP~(]e5:]S' );
define( 'SECURE_AUTH_KEY',   'ah7j-z=nJIDs-uUqTf3}PZ=z?K#Q0,;.f>nt1.=nmVmTv)pJmy:FV6>cO/evbNhA' );
define( 'LOGGED_IN_KEY',     'Q1qc=RhN2yRGSIeXdzxFDEe9`!8i@$RV,EvLr~)-VPH%s#-a5*(<zEx>)GLAV>sl' );
define( 'NONCE_KEY',         'uHN6(Q.UAqt*fIT6&46,p0LZA0tQdL-^2K,CzRR<lcpZ};JbUvbkKY$XjeR^F_zM' );
define( 'AUTH_SALT',         '|kc #Ib(1o>{.76?iL`qx-;g|z/W&dG9}TKVtgnn>2/3r7-p[Jv?-u[H$Q44!NGp' );
define( 'SECURE_AUTH_SALT',  'ZT.(J7i>&NW!sU9!su 0PgW!dh9Uhic;B?hjE0G5cmAV3A@V>GtH(~7hOjPDu&:;' );
define( 'LOGGED_IN_SALT',    '_|!MLBc`r:^wq;.$?.Sd9~oKXU2qz[fK}-Y%Xt,HOfC.sh,_BI,)@baHrEk|#_OQ' );
define( 'NONCE_SALT',        '8&I0~3}2Z7D@dsWArxAESVUhQqjWpZ`o`Z_[JSQIE/>]2;;(ELe<<b}6cZiTgybs' );
define( 'WP_CACHE_KEY_SALT', ')D/O!PVje}_@&Jc5EWP?*7JjkiwKO^iL9Awu;JJ~gtP(9d?FoS7OCaxG>j!*^~T@' );


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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
