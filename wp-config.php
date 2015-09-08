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
define('DB_NAME', 'eursmfvd_portfolio');

/** MySQL database username */
define('DB_USER', 'eursmfvd_admin');

/** MySQL database password */
define('DB_PASSWORD', 'admin123');

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
define('AUTH_KEY',         'vd%dN!d:lo!)B2vadv~^|wzE#k{O0ygB.AxudAD8pnEZ~Y_B{gh0&313SLFjsB^s');
define('SECURE_AUTH_KEY',  'D7D$:|(f59L!U5[Jf)&np5P3TBZ,Xs*Z~]&R9E^.R!?NA2:Q}fVr&rE9kI`)-1g$');
define('LOGGED_IN_KEY',    '~3QG/ToP|}E!Qv]~hG]]2c(U5-CxOJ`g}dSywKXj>zJG1>;mOU,(pX:#4^?g-w)s');
define('NONCE_KEY',        'Pny~O5lBgbJS&lB|3[x>=4K;d)M;6bdh+Xx7=|z4LZX I-lMagS47I5N bV-Y[Al');
define('AUTH_SALT',        '0_QdJq^.@~Oe#zX+c-VSCtR-<v+x),1HuOT8XRyY52|yx9r^pOM/XsAY 7DlU=Ys');
define('SECURE_AUTH_SALT', 'Ry[;g/5g/)r*Bze#3Y{cZ`Wt7wy;AU&4%r2q,C!.tH;hDH<-q$&&<u}(B//x=4MR');
define('LOGGED_IN_SALT',   'H1/x^DIHBo;+kS?aDEbj$}X+4&YFajLP{Oc0H2*^Py6V>&>H=Ms=GQ~tEV|D8lp%');
define('NONCE_SALT',       '^U7]/@onOqFnSz5(pUi[(=-/-9ZW.GTVg#io}n#QF1ES8.HrgJ}87}YY6=Ku-4]:');


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
