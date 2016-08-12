<?php
/**
 * Configuración básica de WordPress.
 *
 * El script de creación utiliza este fichero para la creación del fichero wp-config.php durante el
 * proceso de instalación. Usted no necesita usarlo en su sitio web, simplemente puede guardar este fichero
 * como "wp-config.php" y completar los valores necesarios.
 *
 * Este fichero contiene las siguientes configuraciones:
 *
 * * Ajustes de MySQL
 * * Claves secretas
 * * Prefijo de las tablas de la Base de Datos
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solcite esta información a su proveedor de alojamiento web. ** //
/** El nombre de la base de datos de WordPress */
define('DB_NAME', 'evertdia_wp_gentlers-pe');

/** Nombre de usuario de la base de datos de MySQL */
define('DB_USER', 'evertdia_admin');

/** Contraseña del usuario de la base de datos de MySQL */
define('DB_PASSWORD', '1e2v3e4r5t');

/** Nombre del servidor de MySQL (generalmente es localhost) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para usar en la creación de las tablas de la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** El tipo de cotejamiento de la base de datos. Si tiene dudas, no lo modifique. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autenticación y salts.
 *
 * ¡Defina cada clave secreta con una frase aleatoria distinta!
 * Usted puede generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress.org}
 * Usted puede cambiar estos valores en cualquier momento para invalidar todas las cookies existentes. Esto obligará a todos los usuarios a iniciar sesión nuevamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ' Q)gL(_UVrijMbs@wL6fV--I5rEc=/0^3]g]?EvBe}ExLK8`*x(O+()3<Dp2*$7q');
define('SECURE_AUTH_KEY',  '2}SCCDOtL]je[nhcwwRHD@Y.OwwU}Ns,J$Lj^_/Y(U_&<7Nf}YL:|`E3sK%b{Cd{');
define('LOGGED_IN_KEY',    '~!o{2&,Oe6{Hf:SI!Zj1j=bit15iVIw6,;z|+{@L,3R3|K-Yzv)ng+{(}@CrDuo ');
define('NONCE_KEY',        'C;=}O5{ DtQ,|X_V(JS={9Qjq`Z/+6tUbpD{a6d!8:0^RV2B&UFw>d52PIp/tdui');
define('AUTH_SALT',        ',X<d2rQQa)Hzu?L1dy|bo>elg#)9H5D$yI9IB&1r~:c1oj7>t5CanDDaVz3{9Uy$');
define('SECURE_AUTH_SALT', '(bhst|^2<Jfl_w/S c&(Y-9*(D <XcFlbgr%Dq5x6?HlmttB3Ez+?LuD07=g/g?$');
define('LOGGED_IN_SALT',   '$$I5y(1Jm=Ev5>.jR,?k(LK~M]$cAM7:@)!xWVe6`N(GVF;vBV,O^dz;-.~Ho+IW');
define('NONCE_SALT',       'H=E`%DU<`sCMe(}F]4!/4=nss#w+dkgY{(~m6y=4Aw**QoRUTmS`NcuV&dK,X+nC');

/**#@-*/

/**
 * Prefijo de las tablas de la base de datos de WordPress.
 *
 * Usted puede tener múltiples instalaciones en una sóla base de datos si a cada una le da 
 * un único prefijo. ¡Por favor, emplee sólo números, letras y guiones bajos!
 */
$table_prefix  = 'wp_';

/**
 * Para los desarrolladores: modo de depuración de WordPress.
 *
 * Cambie esto a true para habilitar la visualización de noticias durante el desarrollo.
 * Se recomienda encarecidamente que los desarrolladores de plugins y temas utilicen WP_DEBUG
 * en sus entornos de desarrollo.
 *
 * Para obtener información acerca de otras constantes que se pueden utilizar para la depuración, 
 * visite el Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deje de editar! Disfrute de su sitio. */

/** Ruta absoluta al directorio de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Establece las vars de WordPress y los ficheros incluidos. */
require_once(ABSPATH . 'wp-settings.php');
