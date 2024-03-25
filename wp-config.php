<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'yuteens' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ' ,+$:gZ#9)h7H@9D5+Fl)b.wb5Gj2TJT ;Z_8dR^9Kj4{<`iaTTaL^d5z,;W:pYf' );
define( 'SECURE_AUTH_KEY',  'wG*VY[5S48/f|;+2a<EXqf.gmU^moj.wJzx~9kGl9SjrI6@~OPDV#mpcAv{-Kwv2' );
define( 'LOGGED_IN_KEY',    'w|>IH?4YYyHd&6M e[x_>&.1VRPqIJJ,OysmiIj5c:gGwu5:DF68T)eqJl}joZG=' );
define( 'NONCE_KEY',        '3RZ.eL@&}|`!H%]/f3!pNTVv9t:}5|ga^ZwMZAl%l]pZ-_7:m}c>fS9JT)sY{:/)' );
define( 'AUTH_SALT',        'OEr/(1<1-lLd^dH5SvPTxdz$B>%N38PA~/U{iU?*1_R|l,(OyY:B8SFUpR+==H T' );
define( 'SECURE_AUTH_SALT', 'z@xRlri{i,|jb]<A`(DPH8-%6]2!2SV<!z a&DZ&>Q 1kc9>/kXVP%AXmhUVM /5' );
define( 'LOGGED_IN_SALT',   'Eedu2Z[U%Z/0&;h{?k$YJwA`26H#pI1bKL#`dme K~?(9?urMaJh$]a>yRh[?YQd' );
define( 'NONCE_SALT',       '=MD%vRp][j6Q]+eugYy>/OqS,ja_!t2%m1gr2]PqinC)Ea(xRJJnCIH;@Yx#rM3t' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'yutedb_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

/** Загрузка плагинов и обновлений без FTP. */
define('FS_METHOD', 'direct');

/* Отключение редактирования файлов в админке WP */
define('DISALLOW_FILE_EDIT', true);
