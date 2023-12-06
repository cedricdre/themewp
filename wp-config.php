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
define( 'DB_NAME', 'themewp' );

/** Database username */
define( 'DB_USER', 'cedricadmin' );

/** Database password */
define( 'DB_PASSWORD', '/9r@Jh5@bIPfTIDI' );

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
define( 'AUTH_KEY',         'g3)iQ{xiZL.1;[}Zaza-[.a/bl<BB[,Y%e{ri&gS5]_wnbNNzU;x(Leez{pVDY&@' );
define( 'SECURE_AUTH_KEY',  ',mg1P;}AP>=CU+h$^&tTBAlz4mQ5v{wQa<kW<EGN#W<OLxUkP&+wt:Mc^Ca`~?rP' );
define( 'LOGGED_IN_KEY',    ',W|[C%^@P=M nj@T?3|<&;<DN4K[Y5_iX,;J^HEvWq`mhZpQad s<k=?Tp#63T5p' );
define( 'NONCE_KEY',        '!b7;_ZNafn,*O%;q^_Bd;?_U2`bc<cc/F;4PJ!=BxQ9w,)zQY~O@4daI~ TX6KjU' );
define( 'AUTH_SALT',        'vWVuCI]|2|$qrd~wwew&=CQ)Fzea.8m.X3SWB<xAkvby-Tc>@~F>mnPP=N3wA6V-' );
define( 'SECURE_AUTH_SALT', 'aafZ%ErT6^>}F4*SJ Y~ydJmcw;b/@J l*[?!s{9G(mwr?Av> l,W_tK qAQB5W*' );
define( 'LOGGED_IN_SALT',   'XZl=|M17sd^v9!hios=-CX7}Oq+*-JQhMd(|wHUt:q730q0laI,3.ymf4bDbet, ' );
define( 'NONCE_SALT',       '9HB1rSq_@+vSUe+:y6P;Vq]`1;Hdw1.M/1Qs;qm{._WCeee*#e/P+9JWE=MIPnY~' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_1208_';

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
