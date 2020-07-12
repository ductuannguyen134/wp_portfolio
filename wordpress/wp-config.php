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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wpusername' );

/** MySQL database password */
define( 'DB_PASSWORD', 'A@a123456' );

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
define( 'AUTH_KEY',         'zgS@02]@y.O*S~d5XL31epRb-a6)wD3ZIiH>:Zo$iME&0sL%=5Nu=m(3-!4]w?TL' );
define( 'SECURE_AUTH_KEY',  ';wiV-RcJ|As~Q!^MEuC0ef_[AoUTsywQ-%S FWbyha3|e=6UYV:+`.ABKZj~-N# ' );
define( 'LOGGED_IN_KEY',    'k^lBl!P7j[#+>oF20ZC(,LAP_8a.]pv> YX2=`3X9_[x|CA;0[Wnp5L}&-gL97sk' );
define( 'NONCE_KEY',        ')<WGAia1hYT8WQ[]2 2k[:lsESEZ;s9N~[Go-Z(|~a88:bTSGadOm@FASWEVam1r' );
define( 'AUTH_SALT',        '3z.mGzB=!>rkJGT_PE||rWPlgk]WwhfUhZ_Ljoba)K%RB1:}_xVgMq[dB-ji*!93' );
define( 'SECURE_AUTH_SALT', '/c@!jA$WHE@6@1O2tL}Y2xfaT+C^RZOC^07hqv~LU_IOY8nLU;6dN43^-`?TK, @' );
define( 'LOGGED_IN_SALT',   '6<1gZE0,4]+iJ=^_r:!twZMMu5A|!d)r2KycKjcVF|LV0Gt4?9`v9qQ9s91e}>Wq' );
define( 'NONCE_SALT',       '@WcuADv$m`p]pjsAGG*Yy[<4}u`3mH!Fy:T;5u$1:&3im11}b5VbYl8?#??QRzre' );

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
