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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         't9`#_Mm%r-Gu1M7C/lvn,j)N}Z(c|<.H|_jB`ABGs.9s0s)e@0o&U/8&G~>AGZ:i' );
define( 'SECURE_AUTH_KEY',  'v`,T|VrN-&nG:XF|Pf@IQ=zl^05LAA`psD<JHtTy9z6>3wTO_Is8yB$.lMG&[]9:' );
define( 'LOGGED_IN_KEY',    '2~Hy*2wTzahAK7j:H($>kpT;DAIfP6roA#&#DFaHb^L3R-av1/6N_3BZIirVg)GZ' );
define( 'NONCE_KEY',        'a87mKyVH!IeXx>j_#H w/Pb-u|z7:x|7=UguExcvxAqy=&&.=-<,.,eH>Jkbfk=*' );
define( 'AUTH_SALT',        'QbfD+xK^iZts&h*;Pu|k8tU#7t#>5jcU!p>[^yk>-N!Jz2nGs@%#yID!#BBl<d#@' );
define( 'SECURE_AUTH_SALT', '30BJg }S-3[21H~=G&5d]En6G>=ex^=>x<19rQv@u=#c PC9fGs{[}81[pIl-p*h' );
define( 'LOGGED_IN_SALT',   'PuVme}IY7vI.1c6=GpBHgFI>GA%:!>tZ6kQ]lW(9(_s&KxB[UXp^Wzq`So[,!+?J' );
define( 'NONCE_SALT',       'PDaOiQhHB(}IZ)6P(1PH<xm2,U-*$};iHL$VX)Ev7X;`.pKa0m:%Ie;6>l+TS_2=' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
