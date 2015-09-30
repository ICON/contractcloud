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
define('DB_NAME', 'contract_cloud');

/** MySQL database username */
define('DB_USER', 'icon');

/** MySQL database password */
define('DB_PASSWORD', 'B&55Fac3');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1:3306');

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
define('AUTH_KEY',         '*o$@{Td|t63w=M:rE$q!kjHB;Dm#;|} D}k,]QT&$9yJN.y=b`pp%_|kxND`q)^9');
define('SECURE_AUTH_KEY',  'A]:PY5sx{:+{t4z7H+A5jJ4+&[:H:%+p(+~;H~(Z4b+4_-2] Z`@Qv UqLE-lc2Y');
define('LOGGED_IN_KEY',    '|?pgQs;3|4r6o>-P&6M23koEj~?gxx1N>_1Lx/!Jsrx}U,XC;|opR-q~8@}FWT5o');
define('NONCE_KEY',        '3ec^`Q@WQ$OlJPAWx:[4`oo[SELqD3b#OW0k|AQxUb<t$gXtN`#C7|Xs3|gp&1)k');
define('AUTH_SALT',        'y(1g>6BR#KHTrs?7j--=265u32[GC|au?DRJ2#)l{KOH]l5=`yarWXKX7~d@c4_l');
define('SECURE_AUTH_SALT', 'BE|3g<Pa[uHz,zEOUIxFR7p1bQ(y;y6,J_x)Cmkg!*.y:T=ZTTi73)mp7xfD8NUY');
define('LOGGED_IN_SALT',   't#dosKRfd:mQsJryxKO3mK{ W6;ZNo@FLK3nW(:HL<tf<(fP*9=g;UILs?|=iQ{H');
define('NONCE_SALT',       'iV)<jx4wqH%ai7&(V.w4kl|yH5bTGl&J{Cc|P}%?!R8x;Qz9$NGtO!t&O2CX.0-1');

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
