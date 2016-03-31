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
define('DB_NAME', 'jeffrshe_wordpressa3a');

/** MySQL database username */
define('DB_USER', 'jeffrshe_worda3a');

/** MySQL database password */
define('DB_PASSWORD', 'AsJj1D6ez0ps');

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
define('AUTH_KEY', 'JXY}q+{KbwQutyxnO$z+=aBdE*TWKEGZRtYRja>^R^_P;{{B|cEB@Y(KX<o_Ez((//MMd$BNYxAkRaLeK(|n@bWQoa^T/])]LJt%zrt[)MYgZb}G(R<HD{)aEhMhBZXJ');
define('SECURE_AUTH_KEY', '[r?dqBMK%PF)LFLDPYwxPgsk_;rWBX@LZK!{Qw-gd|efQf%qLkBJYBOyR^^BIPTUmHJRn$!{M+Ar%e%Usz^IYl<@b@!VHvVRTfHJYY_mU<F**ZL^uU?de@Hgt$+KRTcu');
define('LOGGED_IN_KEY', 'WhKNCTViJ}[brg!xRuPjgo$/i%Z=_pS&bd(-??KJl!;nH&S?ydY=Xp]irbo]usWB$/dEDyo;jx(reESs^gVD+mdQR==PhZBU&[IuIejbj|jMtz$aj/hA(T@%&+UHXt+g');
define('NONCE_KEY', 'oDj}/K@gia{ne!Nt+Kye/;<KVJPKJ}_]j&}{xsX@XpToTUDY?*(UKMYEHSaPB?XAKcPVJT]ulFyH$dh@G(KBV+-%aH^bgd^l!(vjTYHnu/fsGJfGzwt)CHvf!C{R+{PU');
define('AUTH_SALT', 'rj}>kvAooCmHF-dHyy/Pr;q)m{xxK;KZsca_Z$aP<_Vm[|;J@[$AdEXR{Qglb+{nvgCF=V=pjiIS;DJX=><=)RSc=)MtU_(*{PyT]oW{XG-iO+vOav}nukBLEN/?a)}g');
define('SECURE_AUTH_SALT', 't]<B(b=@X>bQl[ePzh|?Cwp%=<{kbOMfkdwk!D+oRwV&>QadpAH_j/ZooGK+!B]jEA|)M_suPHMI=IOrQRK-@}KfKyeDt/A>F*lm}V!^t=wz*)-D=!UUFoyZaOX;mfzR');
define('LOGGED_IN_SALT', 'tdX<-GuNPkcKc}UFt]w%/DK;?xnhauKtU_*Ynktv|$_mMK+pFN$DOXjX$KjoZYjUM$>OVxIZ[NH>*})W|+zPQOY]okohCK<N!Gcx%txuO*!thLzo_]|umadG}PHIkS-A');
define('NONCE_SALT', 'Ra$J<u/ZhCQN-rTAMJq[{b]=w]{tKkCs@$ioRa]D;f)dHXzoqzj^*mV=BbIg+hhzOLwrg^aEL_<EfugP%q_}R+YS!<y*KmiOfZqa;}[{%k|Oj@ulA%qG-_bJv)]?x&l_');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_zjpm_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
/**
 * Include tweaks requested by hosting providers.  You can safely
 * remove either the file or comment out the lines below to get
 * to a vanilla state.
 */
if (file_exists(ABSPATH . 'hosting_provider_filters.php')) {
	include('hosting_provider_filters.php');
}
