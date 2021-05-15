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
define( 'DB_NAME', 'sample-website-db' );

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
define( 'AUTH_KEY',         '^:Tj;S%/O>?j0b!nc9t1YkP(K?K^549Cdk{<I^buYfRqW2swGh_}{)5,#`TwwC-x' );
define( 'SECURE_AUTH_KEY',  'b$g.+]VD$Z<cco+#%(+IOV}bOwg~Y1a4Q&SLLoumJ,N;ZQZL-V4<KM)[LL(FmfZG' );
define( 'LOGGED_IN_KEY',    '!5@3?ex~cF0tC*gwTg{Z!e(Ei=RR1QOGPHnG@j; Y]9KpyKCQVAYD$zPT%<L<wNO' );
define( 'NONCE_KEY',        'b~::@E)1V$M> 8#Zziu:hT+-UfbaV=r?:Y}]$rjdt|~a,T$@n=7Y+9QuWW1{RPe~' );
define( 'AUTH_SALT',        'DSF$e@TJIUTgjLF(7Ag~j0&Jld1rBUi0Wy1zI@JcF]g&A=~Z2GA$iJ bQb#=;z-c' );
define( 'SECURE_AUTH_SALT', '1n!1*em^G#YrFMVtwWl/Hhq.$]TgN.}pA?kn(CwbtP7S.}?dPTo^Ieo:zC>Uz~rq' );
define( 'LOGGED_IN_SALT',   '84MN;+m?B($]m5$%1tjX}t$jW,k0rVUKoy]:]Z[zN@9(l=b;1DWD3yv%#wiw.H~c' );
define( 'NONCE_SALT',       '/y?~#U>Mc9DgH19r]2T(M9Jk6Rm.&gq?($z&YEa_hXhp16j6bzr!N>FrG/moTKfF' );

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
