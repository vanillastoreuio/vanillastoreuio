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
define( 'DB_NAME', 'vanillastoreuio' );

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
define( 'AUTH_KEY',         'Tw$vyin 6TYP/G/:ew9Y,OB$Z8dRVg1<xv#&mU,]E!_L /6XyGn#w(TET#f`*qv:' );
define( 'SECURE_AUTH_KEY',  ',dr*=)(r}&ud6.Ke@6KT&W:ynBMB,]thi.g |U;Q>f.MkQ5P|r>|NBR4FH;W09jC' );
define( 'LOGGED_IN_KEY',    '4M`xvW9L4.6t4ra7Az|apQk:fV*A?-O6SA-L(N+Ow8gqZJZz^,0R1?Sf|ugmxra1' );
define( 'NONCE_KEY',        'A? yRUGidP&}El]tCBH@Z?7{^3EmwvR[.010$,mv(BBZm1zVBy<R+&gLeBZ,%wYu' );
define( 'AUTH_SALT',        '9=Z@N)~OfaM9tI1f}?cE5$[`fdu[kDn2eunUyO%L.;6yj#vcSM~HRP{=X80v9FI6' );
define( 'SECURE_AUTH_SALT', '8<!$Nsqv;n@o`v,@=#st$y2F@*]xfr+wfKdE}&Ae^U,+bs.BT6?wXlga{p*?[lEx' );
define( 'LOGGED_IN_SALT',   '%ifJ2y-L5y?ip=@c#2z+OxIa5Fdx_<_NRK@|:;3y$&.k3GTfSrOj> D!U8DX_TJf' );
define( 'NONCE_SALT',       'r7_AQwWjlFpt2,kNx?^i|g%=n3>Y)F?FBO&:k)BNh_4ys+h&)28%BL.F~?FQ=m#&' );

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
