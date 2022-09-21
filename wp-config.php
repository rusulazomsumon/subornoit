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
define( 'DB_NAME', 'subornoit' );

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
define( 'AUTH_KEY',         'Jmyt >3?8/#3=3OKongKm_QXAL9:KB+(BO[^a.(dR<@P>)72;i$ ut3F;Ij3xp-x' );
define( 'SECURE_AUTH_KEY',  'bDSvmx^<6Bxt>91s:RECztGy2/l-H7_~jqL)~/]le%g:Fc/-)wmX6X!4-7Rq}k|4' );
define( 'LOGGED_IN_KEY',    'r8]qL_! c+B_6m$w#?My(}mSVrz8kfrK1fJ_p8;l[&ej8?!r*ae:6LVgYtRu8]+Z' );
define( 'NONCE_KEY',        'c`)(41[&`v7V[0:K1Ij6!p;a ;V/{g{&k2S0d`rv{?pHdpK-nl.),#lOP*{eX#wp' );
define( 'AUTH_SALT',        'ef1Pa{)>9/Ya,(hMFs`sh9z^G{o7;9Bs:#SdiaGO/3eEs6O*96ObC8?IT2UcgrU%' );
define( 'SECURE_AUTH_SALT', 'jbsu32f=?aS4|14BxP]l0]Q6+2y9KA;6EU7N,NX_eJ*F04mqtpEao9tVi*Fy.$4n' );
define( 'LOGGED_IN_SALT',   'tZ`m#w!~T`IC`g`Kj+1:L~n6_}/!:GGUC&*Kw=~42U{[b;nk{s|#pIbG@3s+S!`@' );
define( 'NONCE_SALT',       'MC/@#zj(P+uV{D~*{bb$vUw_sUrd,N3Fk,,#B+7A4sCrK3M%u>Bv])tVTnB<[JS[' );

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
