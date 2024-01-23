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
define( 'DB_NAME', 'lalo' );

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
define( 'AUTH_KEY',         '{GA-%<nKX^QO|8Xm^4#COTyLWl)tYoxCO)KWdHs>9cY^lL{yH|$<&@gu[BN[%ixy' );
define( 'SECURE_AUTH_KEY',  '~%fN>yzzuE)`mm/Sv[XB?h#{~R ebfP:fw9fiXg+A>>~Qv0sq{1AY^OGO$lnhH,u' );
define( 'LOGGED_IN_KEY',    '!a=0ObC3HW~dnC1&$kRX5`&4 yB8M(@92vh]~Lycp;f{;<G6yJ;XW<1Zu9HODREw' );
define( 'NONCE_KEY',        'gsm6L?Qa$1ys,kmW_:L!E_GGQecbG]+tHO0` <v%,z%kJd3gjlIB_1zRWO>Ms}]-' );
define( 'AUTH_SALT',        'WL&o&5[NUXS?xLtO|;0z$h%}CQ,-:{Joq]2J7,zpP=n^SvkLFu@jCovj.kcv^]/9' );
define( 'SECURE_AUTH_SALT', 'UbWz7DFkc/8O_QA[G{cSr!;yiukE5FN?>iQ:p:hWzUnB_B$vG=AS6e(EFf0p8(}V' );
define( 'LOGGED_IN_SALT',   'ke~HhvbQj`(C59Pv?Ki`eZj:CD`(_@bIG{1L%_CpXBJERp@nbfZ`744iV@20SvVq' );
define( 'NONCE_SALT',       'jE9kW~W{|mOND.wG0U8VLchd|7;f9g%/pax|a>.D;RDs^*8jo+0K=^(9!R7a.)>v' );

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
