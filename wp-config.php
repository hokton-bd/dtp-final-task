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
define( 'DB_NAME', 'final_task' );

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
define( 'AUTH_KEY',         'kKM}}#$]bcGG7z<)/Td`}bTI?J joC8SL~C-dD*zwgfz4}8t5XvGa?qETWwp?W_}' );
define( 'SECURE_AUTH_KEY',  'v?A6]1Fk+[EjWqTT(qpj=zI]=)lDoJxA!^L>]Swj==}S=aL@uwH;zuNPyQ(E`<3B' );
define( 'LOGGED_IN_KEY',    'B.cIEmY*wFm6_54VcH=E9!yYx1-|xwgmQRhVl;|Mk##}^1:Q9/2<U<Ge]5:BBi+|' );
define( 'NONCE_KEY',        'cgi]^GRW5:Z1 HrwSBeDGi[M/_nDr`0DE;QetVd@)&r+_xer_Scfkk|^ aqRf]WJ' );
define( 'AUTH_SALT',        '7?i-NKX6?meh,5UBQbGpUk|L8Dry8Ok-;7WChxK`dShCD)^7;,YEgQukJ>Pc=U&S' );
define( 'SECURE_AUTH_SALT', '$bCGZBR/&8^NJanXIR/KvuyLqktK_(D<Ntlz%[qge-;XHnd[BP0n6dB[GLy0fHv=' );
define( 'LOGGED_IN_SALT',   '$eK]*phhQsojCANBUacmrfBWA*i_*j;fTW7}zu/:^;bvs9@!;3m_*h~f1Fn/MnxX' );
define( 'NONCE_SALT',       '|GrC4R-A+[p2A-.i`!`a+XZxgJ_vc<!5K^MNAKr4Xa.dw[>Br4)Pr= w DB[p]dN' );

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
