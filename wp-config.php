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
define( 'DB_NAME', 'laj' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '^a_(0J)wbH;W_<_=]6uMf#jA20/iORR;7iofAnVQ32WhN~D{Os%%~#/(dCNhpHs%' );
define( 'SECURE_AUTH_KEY',  'y7AE5]P|c[a{~e{;|1,$$9e_}Z8C)6)1<z=?[)+(yY-U$`78*E,D|%M]pG@|Ep|d' );
define( 'LOGGED_IN_KEY',    'ush3mGn=upj_B*pG2u`:$M&rC?v~YnM6^zm3}iY~lHHUobty4GA|nKCv;:LGfsFS' );
define( 'NONCE_KEY',        'o-zV,QMgcjYU4^z|7e5F7-2R VP.3.6G4r3JEL<#OtnQx$HfW#GYj51OSvmo6Afk' );
define( 'AUTH_SALT',        '5n[J;7X[*-{e;BegkI/1&34VRKM4>3(W.kW)?2a 9|Ad3_~HzB9)3.(Q->5.?6MB' );
define( 'SECURE_AUTH_SALT', '|nR`lrcpAfTr2_Cl[|~gc#4z *x!O^`47W8^jwX]9S)<></580=~8pJe2-*{`~Wk' );
define( 'LOGGED_IN_SALT',   '=[U.f]F+/)4LB%dmbj8<p~SB8Krc$hZB@iL6a<KmiUNt8V^f=!Bl/6W6#q7p(3 =' );
define( 'NONCE_SALT',       'rZ#lqTGX#kFS7nCKvDBm4S(pSY@zj($qA?+.~tU,B Sf@pll^1ZG0__;#.bCu%tP' );

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
