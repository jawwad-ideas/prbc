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
define( 'DB_NAME', 'prbc' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3307' );

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
define( 'AUTH_KEY',         'IAfdLdI}oB^7_gmXdB7Xp.}}H(cL:E&ab#VKD45?O%VxL|jcla<g&<;`~lg7Q;b#' );
define( 'SECURE_AUTH_KEY',  'y9lSJ~Q0C[9VI|Kmx{lFp }J8uws>j=&Os1WL{^P&&YKl>hMp!X6 j_ten<?d8t ' );
define( 'LOGGED_IN_KEY',    ',-B`N(#| I%5tsBnoq%L4c;-AKBnceg6n-LC8B6Y_/scXa{VSz8FPs$;yX:l/so$' );
define( 'NONCE_KEY',        'b,-vmX~*G2#c;u1q97sDRQ;jCg{(q=~%/ x}A?M&*=hBJX`D|#3#im2~Hx/r_?yX' );
define( 'AUTH_SALT',        'X2PbL9[231_n$(8tWM.wXcs/a;+>#<C2fsN;qcyO$g2{bZBlogfUHZ;!EJqJ>k81' );
define( 'SECURE_AUTH_SALT', '>.{7VZQ[Zoz6FO(CU7gv?2Z&EO]DC^~|L6*e06_& xSDJO!,T047?kKS$/>$JX6Q' );
define( 'LOGGED_IN_SALT',   '#%#V$>8[Kbr_pMy/u9DaZx05-j]+-[)gH-OKoRMMUkvx+4~domNwpEcNo2[$y*Fz' );
define( 'NONCE_SALT',       'XWGruia]s%[b9Z7Z/^GaH:*g|>6p#l~4^&]`U-+X0QVwEO&>,qim2q!/8(/)D+ui' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'prbc_';

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
