<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'wpblogdata' );

/** Database username */
define( 'DB_USER', 'yuta' );

/** Database password */
define( 'DB_PASSWORD', '1234' );

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
define( 'AUTH_KEY',         '*bTs1.{oLgGa*1t(`7^b*PtT#ez2Ee&~F]8DQIBJ/Jm79#glrpAH%hAH2CFLtu/H' );
define( 'SECURE_AUTH_KEY',  '#!Z>=C7.fctNVVcHPfAg4xNh_uP-bApIwN*|?K,Su^`l?[C;W}BcsWZo$8nx]^+w' );
define( 'LOGGED_IN_KEY',    'N=F3.I#Nw.*?afW{y)d<BDL@q!V<[1JIq&;b,$RNu$-DJ(Qw@;zL$24-;iYV|4eq' );
define( 'NONCE_KEY',        '$>sN<7d,dx_)29L;<tXw@2(u]k<wL3<-/d|m2*re;^DLnA[JVhi!pALIKn;9#RoV' );
define( 'AUTH_SALT',        'P UN6!LYcm2@To~Vg0+up;|N ;wy#~4> &e6AC(h,m9So`cf@lop6T7#EWzt;xF_' );
define( 'SECURE_AUTH_SALT', '|,NE@jYMV9T8:IK;>;ctPoLV;hAQ/4uD!O50JF^s;3(F@o`P}HS<F3A,{HYoiyN1' );
define( 'LOGGED_IN_SALT',   'FC:w#P<K5*zW{x,O>w.H`=GF[c4sbOOvT6&Sp}>l2}7k?T$}#0$a8iBup2}Nf2Y`' );
define( 'NONCE_SALT',       'qms zH4c^B7~<hdn[82bIucR(<y^.-M^|KC49mC5DpB9@}!}YVs9trkolSxaf<Jj' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpyuta_';

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
