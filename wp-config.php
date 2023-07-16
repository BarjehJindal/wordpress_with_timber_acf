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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'acf' );

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
define( 'AUTH_KEY',         'Nvt&p$6c/I}T{g^6)}l6&mOZ^ o1]le4!S%}H%<T)2gc>e2@j$Sg#}EF<Kt*7i9E' );
define( 'SECURE_AUTH_KEY',  '4B!w_NTWM4F-5Q@`G`-B8|th%E~o8ZOu|z<j`U=>1c5GIe?V)$4&E=TN@:R~LN(/' );
define( 'LOGGED_IN_KEY',    'SX3bzpo2a<BaJzD$*@`8*e}9O<<;>($Zmii_v=m[FK!Yd@?Es<i]K5KSu#^(7Ei{' );
define( 'NONCE_KEY',        ')^PqwrtXuwVj)Q+{beJnW5V{pXKQ*W^9/3*Jt&RuPalET%#(Xc k#r=5iQR?3Pi;' );
define( 'AUTH_SALT',        ')?#v7]`;{6KO/l5L}GY{a{#tQ74#o}Z/oLcju81wFh 3J},K:VlG3XQg5r*>2ot+' );
define( 'SECURE_AUTH_SALT', 'v!gSc3DZoeU]41+j:56E#)]4wGtF#-@r=,|&m!)jX0E8Cc kj{mQ4ixvVI.NqMB`' );
define( 'LOGGED_IN_SALT',   'wl9xW#R.nS^jaV3+e6b`%.V!qJiqm`m*(CYf17qby/nw!6$ m0k>x*%edaab/1Y3' );
define( 'NONCE_SALT',       'k%lKm6KWV]u[R;V_%egz0tzQb?+HNN}~k|6c.j]gGYyfYxaQKT|pg2Fn_H<:7lw6' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
