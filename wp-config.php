<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'wptest' );

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
define( 'AUTH_KEY',         'HHn/sgsd+Ft1.p[p/P/BN.+mCU4nNpokMLRpM>0y}Jrm-W!7j#n)`k8#lSmI|;hz' );
define( 'SECURE_AUTH_KEY',  '-gNNFAE3`M1{>+h:9Xo*)27mW[{xc4qVy;-OY;598{#rJK>5S~kie)pYNtJTOb!t' );
define( 'LOGGED_IN_KEY',    'e$<K:X0/QeVP>qLy<~6k/kEXLg)#aOak%xtxn(v63*;Q|`x<cr9QiT;a0l?dzLag' );
define( 'NONCE_KEY',        'GFp)k c>KGbynU<Z6XIbqjx>%P=>94~/lL)E~j6yMd6 _b,d|5/x7L%ZW*jaA05<' );
define( 'AUTH_SALT',        'O3_#cV_a&vfK3h4:n<+yDI}oTy-g{Old>G#:1<o.(l*6T9e#]Nwrwq[K$fGf4h>=' );
define( 'SECURE_AUTH_SALT', '1TipSQ-GMbcIx/^`h?JR{+uZAa{8C))YS*m0IU.b1it_)TM%XgfO2-.6qzB`xEtB' );
define( 'LOGGED_IN_SALT',   'ctzv^mNnzD7ozR}Z +Fyo9,XTLec_S).FA~FP0CzRPvhgi<wtd`mRqbF3a2Pw%,e' );
define( 'NONCE_SALT',       's+eXgPH,{4#|DDGS;1hP*;9_0QDr*r#nFr,KH^X;p3Tqcg`+V7$MA$=J8:l_Qa|i' );

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
