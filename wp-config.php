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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'VueJS-Wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '&:-+Sq4.zM|IbT94VSCXSw=xmbr9~kwnbVasGOO~N[Z.DvP[5R&)PrE*I..7i6/[' );
define( 'SECURE_AUTH_KEY',  'm2]d1ZmU@NWt8>Q,Pnusac6oJ!+z9,ZyRp)Q:e*@p51KwH0DK7lGLM{y)8mdK>:<' );
define( 'LOGGED_IN_KEY',    '}:O0,~e%s+q-ZKo7uq UNK`WE1~(M77<~NU<izX1ZU|VQ3OIBc,EI->Axf9s_O^C' );
define( 'NONCE_KEY',        'E8Vhd]&d&KSXd>FZlccl-6F8g: -{g(7Reg5:)XLR]h3+Co#+3bxh`Vj4IUZ,5(L' );
define( 'AUTH_SALT',        'vgMa~|br4mc>]mhixqnEUZcdJD !O8~9s0<bbg{WfXT9__sVaM#UjJ%N-cUUQ(XC' );
define( 'SECURE_AUTH_SALT', 'q7&D@~AH?%5WFHjD;H6.eA_O#t`nv4(:fWIXptS&-UBTPIQU5.E,EC|J5g@)h7R=' );
define( 'LOGGED_IN_SALT',   '@~nZ |Z5JipCdiRhDn(!C9%PS)kyC&|}Ins_4[4yb%wk^YcE00m@}i{Br;/eY^@E' );
define( 'NONCE_SALT',       '+},Y#svr3O:tbsaEyb]q#Y1V&jve9Bf:qc-$i`9vmz&@j<fntZ$D*<Zu#D,T9rnf' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
