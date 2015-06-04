<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'thrill');

/** MySQL database username */
define('DB_USER', 'root');

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
define('AUTH_KEY',         '-@PL,<H}ot|KO2C=-p?Yg=-<8#IC]z}rj?PRsK)9wl93hkAd#+~E0<Et`&cz5Qsc');
define('SECURE_AUTH_KEY',  '%-5H0f]-uGT<}v[YGDMxe8el(]C0z<?kj%i]Gd<WXfBvWX<dzE^$jPn`^A[M!:o?');
define('LOGGED_IN_KEY',    'P,i,5u#*q|_[r5[P8DTosH8S%0&2=KsCi1LYbL=Z/QwW,c{v18&Hd>--F<$=gg7I');
define('NONCE_KEY',        'CD^iUYpFmVx&PC+VOq,_=xIVaKq @u05rE6V!PoaP&Qc.b2|>7Uol& B6xbMcsP ');
define('AUTH_SALT',        '}bPj{AMhnPaa{N1_u|4UF_Pcna^DaLm08!N`Pa1)%P.pp@kwN-HZ,N>f;^sZt3#C');
define('SECURE_AUTH_SALT', '`v>KxKK7f6]4Q$lo0i(6C>_oG|/&`2vlo7UYCCgQIi @C2mnPM`m:,4La[8;UgyU');
define('LOGGED_IN_SALT',   '-5yLIU|b?x%tJj*b`R|)A-&|[6!(L|,_EnfX/M{&e{&K>=V6!b>U{`S ):ir#uAe');
define('NONCE_SALT',       '89@-7-2C]sHM70%)fd~J=tNX&;:B<cGAv$;R`DaIs(7oe+Tfnu}O.Lv R0Dc>M9K');

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
