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
define('DB_NAME', 'upmediac_faqipchile');

/** MySQL database username */
define('DB_USER', 'upmediac_faqip');

/** MySQL database password */
define('DB_PASSWORD', 'faqip8039876.,');

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
define('AUTH_KEY',         '#[#P1}+|vftP8kk-Q+IK(Y!$0-IyO#L<d,>YP)=w~8pq2YDw*&^kY@O$bDXM|WC5');
define('SECURE_AUTH_KEY',  '[2f,aO!bQslF@{cP7N+h`}OC>R.|2# O>QRSXg+[I={_l^#pO=kL%)QpJe?ZM;wa');
define('LOGGED_IN_KEY',    '2d?lZ6LvifaW5pK!>d+wh6yCl).pW/73k9SO-:fk8PR9V1Ms+<#foG;m1(,N0)xA');
define('NONCE_KEY',        'E(!RAC1m:]e_yZYP/I(#-$n6!#u{}I[a+b$L>}Lw-n`F6||)r_z_F%+m:#pZk-61');
define('AUTH_SALT',        'PLH/+P8E$]dbP@JUv|[:I^9|x<jQbbJfY}b9rqm19pQyD?|c|dMwC|p=;Mlq46CA');
define('SECURE_AUTH_SALT', 'aY`2:g82y+O7}Vgk.3mGfItOOTFUQ.DoW~a0]eUanhO&@F+W<j=Ud_3.2->Nvyex');
define('LOGGED_IN_SALT',   'zIa]M.+xvMzNfQa1Sq7YsWIX0(dRS(`,AO7I+|AYj3^9fAqrF+rM~I56JM*<Sg||');
define('NONCE_SALT',       'hRZ$@z5.h|M5AOoGYpUc2;:`*Qye^UJYSs/nfsG2n)024*]XT8*vcfA>Im*lk@Mm');

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
