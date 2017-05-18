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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'toor');

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
 define('AUTH_KEY',         'mqkjR;+Y-V5 l#,ePh(NkM9S.[X8A:)>LMHE?-F8f,Cu;^q9Hn(7:yqG|UZ=)_ld');
 define('SECURE_AUTH_KEY',  'M2>Vmk%{&e(/D.cbG#REkEy_D%!iWbrFD2WYKK[0*w6+( ac~u 84(1v]RCk5EE%');
 define('LOGGED_IN_KEY',    'x^|o: iV~+&5l[P-c4ChbA-9`&P$m7tY2iP%pfF SZ8/pl >=Op7n0o[z]O(JsWB');
 define('NONCE_KEY',        'd5+>x@A0-0avSS(aaxNs5hac&cV)W16}gSc{WJf4;T,h5o`HpGB~-|+|/:ZZ9Ap]');
 define('AUTH_SALT',        'GpB@y1Q]g1<qIkvs<f_w/?dg|Vm<F-:e}J-PKo7]aPwgwjP^9q]}|g[yvVY3E*o`');
 define('SECURE_AUTH_SALT', '|5wm1:@m&m[PjJh4R?Pt*,0?4jrajNdga|c+sZjzA -i8#OvMGd:nK6Xcv<MFPO-');
 define('LOGGED_IN_SALT',   'd8s4T%X*fJ D4DFx)2U/5hlb2UZb}g&Pp=<dPc,:7+b-]a`ASFFtebgTjsc6s*/<');
 define('NONCE_SALT',       'hjTc%XL~tb%58IC+XMCVN}f{jlGf{=^9-qM(L<BNR:2Jhyg#eL;?*-}]kg+N?pS]');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
