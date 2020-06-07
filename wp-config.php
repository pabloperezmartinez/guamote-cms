<?php
/**
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define( 'DB_NAME', 'analogo' );

/** Tu nombre de usuario de MySQL */
define( 'DB_USER', 'root' );

/** Tu contraseña de MySQL */
define( 'DB_PASSWORD', 'root' );

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define( 'DB_HOST', 'db' );

/** Codificación de caracteres para la base de datos. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY', '}s1dJa/A>En&L&!)}Hm}Im0Mz+saZTUuWHz,iR7?o+EXRC_Qkv&#8zW{NMpiBg_}' );
define( 'SECURE_AUTH_KEY', 'V8=;yGwh?q[fkA$=?T|ymLW;&0ESqn_*xRKT)uZ%BFNCLG@/<Li1+Y>z2yV*-GB#' );
define( 'LOGGED_IN_KEY', 'FJrZrZ])APrZGT=nD~K4MM#1VKf0qmVt i=c$Q$Ci;g`7e&80v[l2.=g=WH^XD8D' );
define( 'NONCE_KEY', '6P*3j8i31+L5@Io_YUjI;|#c:652KsX1)^Vpbg`mCJ/i2I#C^vkE*%$&JZ$WeAp5' );
define( 'AUTH_SALT', 'pnO@aC!UpQB&JpvoQy7e;<x|`G,eNwxrVDL^O1{e)=uwqd 2_c3!jtA` bmCV!rf' );
define( 'SECURE_AUTH_SALT', 'F,])@a$mvAxQIXT,30=//#C{Sp4b|JU^rmz]1:z*9Iyhousx$*<z2BT}AwR,|K>y' );
define( 'LOGGED_IN_SALT', '<!bmoSAnD2l-EyQ*NL5w.F@|;~HV:c>y+#cx7]?e|o~nFSZr)UvVlUg4`nzN.dwX' );
define( 'NONCE_SALT', '(~$S3?(@e2|jArW:J_4=0&/-3,J.GRpL,[<~J;Y1>Hu[{}|-+_f/9QQ0.q95{Vfa' );

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix = 'va_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
