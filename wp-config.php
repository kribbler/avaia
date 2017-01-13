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
define('DB_NAME', '');

/** MySQL database username */
define('DB_USER', '');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'H?K?c_l8Us||-j)QNMAp83jTUKzC$;l~#E%Wbmj(q~.0!;r1#I5RkZ+[=QEh,zxm');
define('SECURE_AUTH_KEY',  '+@JAdYRi0:QlOQEIl)<!z(*_)]([#d--=H|`H|z#{JfcE~4K+p(VsY&O_5@fje-q');
define('LOGGED_IN_KEY',    'Yju_n;?U:Pq-KLVk;_dFAjTNjjDk1T|=Q2jj-fNplCBfGt< &N!Y%F0X?#@a(#;J');
define('NONCE_KEY',        'RV`3Gqksln:]JWjx75-y,g?Wxj|h##8Af@G$)gC)YoO5+,RO(<RZ]F%5g|}V)[}+');
define('AUTH_SALT',        'Fk4N|wT>lxJ3i2|vx<po$,)d`+C+?0&vK+UC6l>S-0/>IZD^K|z0is-| inm5EY+');
define('SECURE_AUTH_SALT', '/3IQ`k&nVwWHhPsSSB`piO/i.ZH=-i=r#3|z~&ott!|AG/PqLCh:3Alp_dpow.kF');
define('LOGGED_IN_SALT',   '>.?q~#NQWGCHdHTU|HRm`Nk/d7l Hm]xLmffH@_Nf(/?>N0Q1CH;%1?q1F?fRR~.');
define('NONCE_SALT',       '$1X|Ddnv`+Ned6KIKf^SxW;+lA|rPYMlLv@wq:]89HYnotjBxtyv&+{FUN:C|LB4');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
