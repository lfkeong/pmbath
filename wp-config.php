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
define('DB_NAME', 'pmbathwp');

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
define('AUTH_KEY',         'M- (-C8:JKBt}&;EVJ`?Z}R4v;,.HWbDex^[_KIOa!pLyWhV#NH}>WRq}I5k(nQ-');
define('SECURE_AUTH_KEY',  'Zn$7Cp33qzlu:$uWNa<kFR-Tjt.SDSV*nlQhi%jvzo_`Ekhj-NB<ulWGRJ@W:oQL');
define('LOGGED_IN_KEY',    '#mp yjfeJ65KgFX>|~}zO~NTgT-Ej*[R&=9xR+CZ`X)J!|pn$8tW|Go+5B4+e.,%');
define('NONCE_KEY',        '8ErIy_Oa-QR:FIV)[-@&3J=/D`2}3>j;N/Yc?%GS#>[Fq)#7txETvzqW#]J,ak`r');
define('AUTH_SALT',        'eRc/QJ~Z0dw2+-x/t=sM=M3A@f|qCX5?Y=n6!`~`NG+m2Ye{^=|3O|cHz_|a~%e-');
define('SECURE_AUTH_SALT', 'X]-d?+a.%@X:D=:;?*Qb>AAaKXL,LK;g&f[4H5VAAh {eiHR|JAyrRQT`+NvC mp');
define('LOGGED_IN_SALT',   'e[:pan[ xxq{771f(wiu-NFxPF$%doZ7|y|:?7sSc7]p7^Uzr+2lHHh$=Cy;K8(v');
define('NONCE_SALT',       '&{heD70~2l-Giuf|42duuarz-Xi>hntZ~654[S/}go7IN:{)qvyZttKfQh#uUP,)');

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
