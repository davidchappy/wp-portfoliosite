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
define('DB_NAME', 'wp_dac_portfolio');

/** MySQL database username */
define('DB_USER', 'wp_dac_portfolio');

/** MySQL database password */
define('DB_PASSWORD', 'kR1SM@R13');

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
define('AUTH_KEY',         'A_a>PLcK3@)w_#$>x*,i|gCgp8R(tKCV-Tg,d t7XhR^jH?m$!QNd7L:C5`s5v{R');
define('SECURE_AUTH_KEY',  'X7)2%-)iE+aQ=._uL2JgHwIt2kOozTK:h@YwRT>luMIcBz;~/Am{Q0tB^cH0<bgj');
define('LOGGED_IN_KEY',    '9q ]YzS %MSVA7>R_>5cUL:S?qS]rYLf{)!Kl-J/%jQ*o4a?IGGb+HG[U!:.UDDU');
define('NONCE_KEY',        '{;DHeVu.,a*5:;Eq=LA7_c[tfu:|jR,WZq/M6NC*PN/5tVn4FMn@51op-I5U;umW');
define('AUTH_SALT',        'B QUE~tX+JcwxuWyK<o;u1c2#zAO*OVwV@G(`Ymuq~}Zc%(2 u{3[<+G>8};7q_}');
define('SECURE_AUTH_SALT', 'Xh%a:IalPCTeEtn0v!C>f;b.|0Y<Ran`]5=x2i+5SMYE:)+6P&@Bet mAEua5L6$');
define('LOGGED_IN_SALT',   'z[Vs1w}+EfdHR.]plhdIEK_Hujcf8?nDf+gC)l{$:VueH#Lrg#62~r7:h~>(8HNS');
define('NONCE_SALT',       '+*B(dv/5LG?X)jtxtOfX+Cjg%V#|j@Qyq.2r)oD&uS<wUEA#3Diwv&VfnXVh&(1<');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpp_';

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
