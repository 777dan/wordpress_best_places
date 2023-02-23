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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_best_places' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'OLo, er]c#}H(iv-p.tO/H@DHi,YZtH!|(T.PjbPDV,RV)Ce4+yM%~|ht%Z^32``' );
define( 'SECURE_AUTH_KEY',  '$%|RD:n1 pJD!X$Xoy&wlt;^}=n+fO^8o^Euuij$k..*$^5CU=xQLm8@RM%i1cP=' );
define( 'LOGGED_IN_KEY',    ':RhhYx(L*l?<K>tv4CVCF^k9<7_qb5`+LWQ2}+gVW7)0lEDO&JA]iuD_ShZ?u%{s' );
define( 'NONCE_KEY',        'TW*tp78C!hpSpgEA:VMS<EyZiL@RJ:h<q8 qy#p/$|XbjpmMrYZrs(;]#,sr-,`(' );
define( 'AUTH_SALT',        '/Z@XJo?=}SNUc$:/D..kV,w,hk?XtIFWdv)Cx)NWX$7*z)RUzX9,9y+1|zL57#[W' );
define( 'SECURE_AUTH_SALT', '12<#A,7YE1~adyYoR)DjUSa0bMQ40.aM~S*gy^#euN#8bT$7j74+zN,_d~PWzJcY' );
define( 'LOGGED_IN_SALT',   'b`IqDWLY$_aegnPqSgk0W0-5tw@(>-;4I,wXN2?R+pmb#wn[%dR*4{~TLI|vG~L[' );
define( 'NONCE_SALT',       'w?_k}fdf-c#/7RWQ]*0:Q#V,#%A+d5yxwhNi||>~f,K1]L1mCppCTP/WbX 0Aw%&' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
