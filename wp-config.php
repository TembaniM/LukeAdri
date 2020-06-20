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
define( 'DB_NAME', 'lukeadri_db' );

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
define( 'AUTH_KEY',         '|xfd1TSX@{>~!F^3GI 6oM2MP-:FL16H`}~y&x&By;9ARSY-ty/F1o*$45}wl]f6' );
define( 'SECURE_AUTH_KEY',  '~bS~V)Nqwl^)!Dp($U.I`od|}Xj0a7|WJ]SIguXi.$*%Gw!i2%veUmJOB#;6e;wH' );
define( 'LOGGED_IN_KEY',    'r2v>l7jXOR]V;3=Pe}[[`YF8MkCj|fSf8JeqCJ)-G<r;YABBh/-&r/75DFLb5P#%' );
define( 'NONCE_KEY',        ' h6ZEx81OM#H@ s@a+$*h8Me@$vtPYH</8n4I!];p89pE4)Y)*{m:(FB&~p~OMYa' );
define( 'AUTH_SALT',        'T?Lu{P rYfVT8c@RBoDhao[,#@4nfEld;+hj2+<l%,bgr$3{7K0#%W<h.kdo(wI#' );
define( 'SECURE_AUTH_SALT', 'o~?sb<+R!2gq1U}-mq%E?@cWXb4LQv`yW!2~[oW4qE]=a63+<IuEHftiv+q$pB%[' );
define( 'LOGGED_IN_SALT',   'g^m%(x0zfeW$7?l$e6GD@hk,?{k:h,PJ$f_G/KxyUaRKP3e(q+np/S~/D:>geOG6' );
define( 'NONCE_SALT',       '`&*Ci0$am,`T{zoTJcFF{oxs-oA_ ^9lR[Zp-`2KT+-p<<8@xf{8hFV^v<nxIinR' );

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
