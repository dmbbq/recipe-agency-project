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
define( 'DB_NAME', 'Recipe' );

/** Database username */
define( 'DB_USER', 'Recipe' );

/** Database password */
define( 'DB_PASSWORD', 'Recipe' );

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
define( 'AUTH_KEY',         'Z!(;n]U,U#HA=R-[M}@um^CVm?Lf{0?A8%Y^@]iQ<C~pq3~5xzYJ56GA#lT}9l73' );
define( 'SECURE_AUTH_KEY',  'QBEd7p~hHh>U0Xr*-dC p5u0j>79g$jd;E]{l<7i|DiTn&C&o@729lVT+jzi]/Z&' );
define( 'LOGGED_IN_KEY',    '>3$-4[zs5 scAO6%o8|`+6$sFFKf9t{Z}%t]!u2%c^zc~AJ(OnE9hovGxA5Z7F(w' );
define( 'NONCE_KEY',        'Jk3pjuD@;Q^eL*!Qp]5iTXDp}^{9E ~ LSq ZGy2bBuNva .f^ gS!c)#<zmicwv' );
define( 'AUTH_SALT',        '_M9?L7O6J)%Ejipe^Fs~IMWW4+)RYj0M:&j.$lXoP]/,}k;Q.}>2!`cS@BW&9& +' );
define( 'SECURE_AUTH_SALT', 'Ah[:M(u|4J@r,|q/XJ`Tpti]2*sE5&$~Bv==NRfB?)[;[m3LO@RhGu~u7[M%(eV2' );
define( 'LOGGED_IN_SALT',   'R5EBI>7%i*L;H .U{)Q|gUk.1vf`ZV@.R|G56F_Z4E?Zr?F2[/,mJEfUFe{t$kaj' );
define( 'NONCE_SALT',       ';|nO[bL4 9f>rWL&j[I*[y&l6|3u7FxGGn=urX2l[i`1/D`$$ZFF4T{5twWqzy{V' );

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
