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

/*Actualización sin confirmar por FTP*/
define('FS_METHOD','direct');

// ** Ajustes de MySQL. Solcite esta información a su proveedor de alojamiento web. ** //
/** El nombre de la base de datos de WordPress */
define('DB_NAME', 'db_biblioteca');

/** Nombre de usuario de la base de datos de MySQL */
define('DB_USER', 'root');

/** Contraseña del usuario de la base de datos de MySQL */
define('DB_PASSWORD', 'dbROCKperu??');

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
define('AUTH_KEY',         'kOa39q27&us[5D5W~}_VWr7S8-Lek|g{7$pd <Pa7t8G)GN49Gc9iu)G,7RToJx-');
define('SECURE_AUTH_KEY',  'Q9sZO7s!got<>U`SK0U6Tx%*wkT1v18g^lg_I-?lw`jCWqNL;0On;_!it!6`81u-');
define('LOGGED_IN_KEY',    '(aI-lcRT0;3=@.{s=HH7y&ExFNf#U#K:g{}N/pIL[^vsCAQ-8~GL>v`*2]a3}-^R');
define('NONCE_KEY',        'CEDilfAw|qqy/CoiXay5#~?PSiXf:bw`_|UZrjOQ?urkG+4cb2U7^u~cajZ+:oi_');
define('AUTH_SALT',        'BkybFj%-fS%|$gZ%=-enBV7b93!*`Rg8eL_=yn+.5BqJM+-~KaYojLE^7-?3LyJs');
define('SECURE_AUTH_SALT', '?V,s$= 3vmqtV^)sucR^aJbSQ>ItL{s+(X7[)q88HN3S&fwY8bkTm3kVRCZ}_Ay)');
define('LOGGED_IN_SALT',   'UN2#b3>p&rY5|./|&,U4]e,V`;eZ#_J>7g}|^m=dJ.xY:i<+]_1%b.d1cCuEVj:S');
define('NONCE_SALT',       'WF!JHRbtLv|uCSl4Ms4cb`#|xX=c,cghpP$i}E0~BV~QLma(5;f[.W7.FXwaY1z(');

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
