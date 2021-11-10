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
define( 'DB_NAME', 'nhominur_wp' );

/** MySQL database username */
define( 'DB_USER', 'nhominur_wp' );

/** MySQL database password */
define( 'DB_PASSWORD', 'QGo^UGgWI)cfwW)vNP' );

/** MySQL hostname */
define( 'DB_HOST', '103.130.216.113' );

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
define( 'AUTH_KEY',         'qUg<khwn7+aRVxF<d8Cc$Z{(<L P^$TpiB1=MlBlC&$$IiCg=9@-YOC*:4@OE3yv' );
define( 'SECURE_AUTH_KEY',  '},)U<i-[v:JhLK)D+d&Xm_()y@V0|Fv <;R&m`ylY{~h)IvlQ5@koC~4xPt(mBK ' );
define( 'LOGGED_IN_KEY',    '~8jL`lK(Wt|H[T8Rg#nCvJ1V6:3,p09?BS%,y`7L~{8I7j /c+xd+2o{Wnis1Niw' );
define( 'NONCE_KEY',        '~F<f6i](8H7V7j~^nvfJAyanU<ONH_:HG.NfB &[@GK(3ULT=>@vJdJ-l{uq2f:(' );
define( 'AUTH_SALT',        '``:(.rru!&Mw4cp9-mW0U|QT-pjBg/9)FaEBgB5i1H_TN4jfWb3#ZT-<=Mcw+$L|' );
define( 'SECURE_AUTH_SALT', 'd=}/`o=8c5KyZ:no$-hl>,.!!N$#jI)?3W;.CP!XriA3>U Fm~ZfHfJ$F6gT0fXr' );
define( 'LOGGED_IN_SALT',   '[NF>Cnm7rdyY#D>SQ7qNj`{_ R7iJ/}|Tf?SUu=2x1u-a3ABCC?S] aWj>+yY?F1' );
define( 'NONCE_SALT',       ']sBi.rDf.8]hzdI`&^51#,*Ja&*Z4+OR~(@NR`$h0B,B7zAAEd)6*(WIcT8;:&R7' );

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
