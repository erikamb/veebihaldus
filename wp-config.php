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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'b88a9d6a85f194b30c8db6aa8e4abef573d3b08bb174bcac');

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
define('AUTH_KEY',         'S:Ap;1hxR|s;9ZPZ0I> !bDdS*BtejF_<9-gL]-Z1?ga+aH[^Ut2p9xt4O4DvEsp');
define('SECURE_AUTH_KEY',  'ZGdJA(sHRTLpE|zG50f:W7 /})ElP1Hfbb11b`#F9f!?:Ed/J|!e8ZCa{n=oLJ$6');
define('LOGGED_IN_KEY',    'VEj{,*Nyp~ZJ^wJNxjOZ5 6xPBSs we7AqOR/w]Y/pL*v:{tyFs/dv>K$oljd$t;');
define('NONCE_KEY',        'yb]pI+u}RA7|ihW^aw==A,_sh]@<3e3iD|ht*^+98HHc,x0f>*y2qkwC:^#laqYG');
define('AUTH_SALT',        '|G)Ud_u_#:?Db[+jTK!eG{:f.dC@v%byE9[..y>:hd!DdyuqW`ikBA/%NX{k9%.}');
define('SECURE_AUTH_SALT', '6Sbylq#yFi2dT_%u54`&4(ka=G|DItemU{wFb7+#{NJzX8NIACo9*UG+rg(KlGnU');
define('LOGGED_IN_SALT',   'nyMyirfqh.vji/=.dU|iS|^I]Ytm}Du.R:zU,P#|.7-t%pP>^eC5XRlYkduxpvIA');
define('NONCE_SALT',       'nG*lJ*QtI$`ovT)LSLb+iDaC;@2AfmuLf]c/,BHjQ6}?=;vZ_.dsdf=J,iz+2dEX');

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
