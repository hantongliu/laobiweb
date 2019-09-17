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
define('DB_NAME', 'giobserv_wordpress8d7');

/** MySQL database username */
define('DB_USER', 'giobserv_word8d7');

/** MySQL database password */
define('DB_PASSWORD', 'dlh5fyw7Gps7');

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
define('AUTH_KEY', 'oL;@eUUeH)=_QU[zIfX<&lQMx?LImByuFMOnc/zbD-zTTQ;-t>(>f}ZA>f]f|&R@|Kf<A>l<Lajzl*+Z*u@jtyhEWejHFz{z!dxWeU@*Y%PuX$b[wkmPuxZ=dKV<t<l+');
define('SECURE_AUTH_KEY', 'aE}[mCA}cgA(/zNBvXBS|tAFUWMByiCBk]FiAvkh[DFOpcH(s+lsZ+f^w!}P?OC?koXnBu)pufSsA(sZ@Gbs=^q|c{&kj]@^ZHEsj()&Z]z_=MunEiB>|[]<]Tuwbr)k');
define('LOGGED_IN_KEY', 'UnXeKiV%-eAdP<E|a@Kk+<fsUdAo>mcP<?d{qPX/jSzJv$/S=mqwxF?@epW&dz%!L!Iog=xp;]UoA?}/-Noz<B@-rz$If<dy]gTv/!W|VYJ|ImI=iIBr([lc=@a[rJBL');
define('NONCE_KEY', '-LjuAmNso}<?WOo-O(To<Ur-[GQ-S!rbOGASZpI[BEC[-EKtvjZyUboaxhckahir(&-Gbz;(]fJUz-?K)noWCekyAxAqGtSbmzjkVw-in|&GB/hO&xxBq}FYIV}MsCms');
define('AUTH_SALT', '^!QTNsH>=i$Nof;rkV}(Q_I*DO*XdT>cKb!eIk//DRDrumJx!F&l$GKt@ihNH}SqhpcmE[H$G?[IF;&yIRoG$+KV={UX%syM}XIhe}wkJqTb}UvZ;ySU}dzI(c@/Z>J?');
define('SECURE_AUTH_SALT', 'RpAbFWUpNq=)QwX_u[)q=y$k!csA*%Pwg&]edxfWDD-%PUl/&gEiu(-dIBW/TCV=Fuqvr|ox?<jNbslp)xpSqyZ_]da]>(amGm(+REBg&HOh*qZu{je&RF/h*Fk+[E^{');
define('LOGGED_IN_SALT', 'SA^dn/}wvdFsrnceV}z-pTLNoH+c_cqf_xqDI{kPOdp-WLFp&hr;hZZI/aZ&zygCFSO;*tIyb^JmFG-OFQVEqVG{o/rlbaINbW{KmSDWN)_}ResS$hOY}+vg/Ds{y}F<');
define('NONCE_SALT', '$lTdt)K-tIbagwVWHt{XgsPD|FaY%[&{chm+(JAU^]%G)D!?%jyoUM|WLs@FC)aX%MJ-K%sbTn&-)VvykQtn)nxd;cpIeLinzw/t-)!;hy!}NEOyM}AB{MN}U)v-aUV&');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_jljf_';

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
