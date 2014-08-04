<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'caroline_glaser');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'v0!i7jK_Vk1_]Z^D T}oBr!-fOna;iH.N2N#4UhO;2g:-=TWjl+K+?P7?v@8Z2B ');
define('SECURE_AUTH_KEY',  '@J,QYX r1,ha;*jif:4l:^c{nMZ&S1.C_CL){-ZY|09tYo`UxQ!fYOKQlXgCoqmu');
define('LOGGED_IN_KEY',    '),Bf7W~Ty2)eg!Y-tpkBuSt5^8xx$2^~1tbpD(oE;K+zBV^-$BY/Xy2ErR:<IgqD');
define('NONCE_KEY',        'rl`fIRXlEuLY`9-n+Nnb8mn-4=4x>I^f6jc<zQDbZ|oH+^ e#YKT`WP=@qMiM@sR');
define('AUTH_SALT',        'LhZcO|o|6g?bWEb@*kQG1$j}@RP@i4Tw%0n%fy2v:pF1U.Qt5+<KLS`$Z5>:R^%z');
define('SECURE_AUTH_SALT', 'X+Thu7:}Bb~_@=vFvr[79f&iUs)H [eqyP|-c}k+!_SdbjSzS@?|BPDf1[L3SP0>');
define('LOGGED_IN_SALT',   'nd,g!N.e9?n=u*-X6E:BK!F22|b[OqT)XX^WIG]|0<>yQ#d@dJ71^fVGzdJ43Fvz');
define('NONCE_SALT',       'GNnk9eJo`.LDj[5CRaN]H|3DWf m*B+7 66!h.`ZTa+%(4m=}cgE$l<{[5t`>7aL');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
