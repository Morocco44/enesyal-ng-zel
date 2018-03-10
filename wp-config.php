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
define('DB_NAME', 'enes');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         't{_+$zAZ|?)|TbSND[b#cTXzc#Nn$(5oWHmeBVJhNR5RSi/C)uGZ<{r?3V_tx[V&');
define('SECURE_AUTH_KEY',  'Yi[Rn;Fdr.k:|O&IDuiv~pspI1+WP WJmEs#nLAJnekH[mN#Q{usWCg-U fdy|:|');
define('LOGGED_IN_KEY',    'WC-l<<c8GLg@b6Je5pEJX0K_! aA?~yH8;m<9xN%M$*?Rnn6:PDfKIUv(zzMhKjo');
define('NONCE_KEY',        'D9/.lUAZ@vH9A-%kRUH/s@S^K90,SF#rBlTlgSCKTv[fmFSu/d.Sbg,>05;K$a+&');
define('AUTH_SALT',        'F+Sv@Z6&>:C+cCi`5t=A/dlN=)h=ZEjE<)$gG-Wuczgvh|*!Jf/85eILYfdDed{2');
define('SECURE_AUTH_SALT', 'uW^UNllHq&RQx{*_nE>*+px%&ySd)n}pINw.@P*CG++KV47o/5{k]s$zT.f2y4U$');
define('LOGGED_IN_SALT',   'g)9_O%,?R=)@vg5Yx0&1h^o|;Dz=gZmIP:nUO#g_.=e>:GqTa<u,=7H!OX3@#Lln');
define('NONCE_SALT',       '&I)?tM!h87:<0^6V|:7^[!%,I80%_}f0}L7n+cPv4!37<u#,3}b>?h/>B`n0wg}}');

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
