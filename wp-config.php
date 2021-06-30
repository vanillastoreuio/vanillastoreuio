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
define( 'AUTH_KEY',         '^M1~lSjMd%(644{t<X#DNP~^HbdHtetV|=V1c1`HiRsVnyM0=GN<,08?MPE4H/^8' );
define( 'SECURE_AUTH_KEY',  'GN+u!MH[ONH}&|yq%5NWBjG3!b{si*Btj^-.3S)+PLhq7@.mYG%Jn>I_VC?ynX3g' );
define( 'LOGGED_IN_KEY',    '%};_4g1~2w<rC#YZCcR2*we>g M+^a3WTCJX+&Gedj7+Hv:~> >`-9$<>p<:5l`(' );
define( 'NONCE_KEY',        '@4HQY1<C!u@sxEpkTe7 +FM3CwYlsq0`h(qPm]CrYfi1+jd<3M3Xvh38/UA5d:Hu' );
define( 'AUTH_SALT',        'a^>Asvu>:R{ZMiU:%4-oN:69:5&9 ?j,EzA$id>2y`G)b*sVF#~TRS1RPZa<m@b:' );
define( 'SECURE_AUTH_SALT', ' <?:{EjS_4Z|k:--O`-qMvwTK2>}Wel&`#Kr4kj#pe9_ofZGR8wocVgt@QGU3,7;' );
define( 'LOGGED_IN_SALT',   'TcTPpz)<ToQAlJY>nX;BpMGi#5_31r78w*.^*93KXOThDA9^A`?N^(MD>rc*fo@O' );
define( 'NONCE_SALT',       '&(!JmAZHz0;?{$+hCQkeMS~=J4+a=n}HyP4Q>{Ii=~C}n 4e1R)9h?^nE^KTCb!U' );

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
