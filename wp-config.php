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
define( 'DB_NAME', 'wp_ecom' );

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
define( 'AUTH_KEY',         'q~-yN1gk#HBv&OO-(Sx(r9nBPgqpU},T&|6[;e $zZI{_?%)1ef3)JUA{dkGi/rh' );
define( 'SECURE_AUTH_KEY',  'wW4YNH/_V]]<j((L6@9R>HfwPkLb0ZK-><z3u.uKD/yx%%HD,HCk@qW4` dt#A<?' );
define( 'LOGGED_IN_KEY',    't3T=BtHyO;:s&/ryt-D6iiP=cWfqdwRn}I:3Yj$-B9jA]bO@acLL1lroq dF }d0' );
define( 'NONCE_KEY',        'I<3!T`$|>4=OxM6lgb*M4Rq<QY]*rUkuX9y;=iLTM=G;;~XGMN&2)q$UldgllTIu' );
define( 'AUTH_SALT',        'Ayg%J`TJC02Q@xR*V_M:(4Av88EcJ;o<_JTTWU?4SK~Ft9wT(Sub:IE*4|#D?GFe' );
define( 'SECURE_AUTH_SALT', '>e)*pmy<d *c^XQV5mF@<02TT&X563IODFY;fy`9Y(OFKf%]{)-A2Zcs*tK4zlc4' );
define( 'LOGGED_IN_SALT',   'aEXxcQ_#p$NIow>PR}KE9c49%pe)s/KS*Pbm+3{B|md)PKWJAD@pskbOv6CGgutQ' );
define( 'NONCE_SALT',       '1Ikj%O0p/PCwt-j%XOiuD:6U-[z=@bBM9{_*b8:]!XtCWv4XM1&FkC(caY~D{}J,' );

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
