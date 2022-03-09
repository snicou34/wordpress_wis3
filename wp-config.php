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
define( 'DB_NAME', 'gestion_contenus_sv' );

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
define( 'AUTH_KEY',         'An95HEn2 ;4wqwfhsNEO<2Py1;(+[%x#KGj+TT0HIW6~.%)R},-0EPJz6d:Ch_wH' );
define( 'SECURE_AUTH_KEY',  '(Gz/b=~ I?@1Jl16;XR>rE#=Ns*-y0N}1@JW.Q Tl&+] %Ee@K{s*xGn]([$r)`o' );
define( 'LOGGED_IN_KEY',    '`pY>,e!/oBLs78(zT!59K)qI(NP,G>#t=C%HG919Y)Dbb31omj:X4kEL{3@VLqdK' );
define( 'NONCE_KEY',        'r#8M_4t1.I[ehWMa,~i`EoQ]FrF[rEy4bvYFrIST`PY5oFW=/ctkKb69`ei3&Zuc' );
define( 'AUTH_SALT',        'jd`MM~9-pVHV`&@3k qa^[{.c|0d@vtjN(lHr.UWSyB74HMIXjX0t_gOI[hd;k`J' );
define( 'SECURE_AUTH_SALT', 'z.T())ZCu~^YF]DouXHOaH}BfHjm8;[_w>,rV-1)S=TOoa+3*c/iqOG4fcu7Sl%m' );
define( 'LOGGED_IN_SALT',   '*QJFqbr(8EZ!fCvw)XA%O!6w#R7e2~*eZh^X!$i$IY_ c=SwE{@4z6TnGIc )HVS' );
define( 'NONCE_SALT',       '+[Z.]$?z)hGIja|;. [xPbOH:HfF{G- h>p-*mT.2EO,VIu3LrLS5&bnhxN(J_Q0' );

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
