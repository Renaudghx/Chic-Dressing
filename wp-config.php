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
define( 'DB_NAME', 'chic_dressing' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '<(7U!|:D_U*%4hv1Ys![wF1[/&j=e{N&%J!OAJ95b!8fho1@$Lry#}&C3uN><!iN' );
define( 'SECURE_AUTH_KEY',  'cxt%AW?wH&th}OJxvH ^,]c~viMn1Qt|F1=`Ng)~7Sp*;|TFE/ qw8Ks5I;yx4tm' );
define( 'LOGGED_IN_KEY',    '+b&EJ;k9t#(XsgFp0HCl Mormv|+o{W/7=&mgcXE=>~qIda$p_%3e*SbFk#v88Gv' );
define( 'NONCE_KEY',        '2i5TBCq5$7zZcX11/kC>UqbD!?>T/-~K/>%1zBm]phua&w|3NMqNaks6dllg1/B$' );
define( 'AUTH_SALT',        'I(n`Ec8Vh&J(U.8HJ/?{AeV:_yt[&#&]S`;sbML(&Yq]mr:FkUhv2joR;NQv2h_y' );
define( 'SECURE_AUTH_SALT', '4Guu2/=q!SCv1Ax-YJ5vN^ETQr.H@07%5t]>l<7| *iJKCxIc8XMq;StG)j;m86e' );
define( 'LOGGED_IN_SALT',   'R6syYplDqcW=7Tg+q ]e}PF]4Vl}$=b5NkgU=|3P(Krp/Q/TeRc$2uWt3eyrfr`U' );
define( 'NONCE_SALT',       'mKsX}hERwWtZ&,l<r,YQ3P 0,`kpkVx5y{J[dAgtV,ZS`[p[RWSbzbie{CH^Fgyf' );

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
