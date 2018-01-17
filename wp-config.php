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
define('DB_NAME', 'rubix');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', '127.0.0.1');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY', '`pLDU@ $t|]^ugNy637FJE~pek]~WwYfgGfuWZk|#j[Jol6%]v12.gSCsgC@p6>N');
define('SECURE_AUTH_KEY', '*/oDmk9hkNZG+o>PEEp,=@Jo7]=v_LC/05}u:=~Fm|+WSC3nCw&y ybh|gpL7d*X');
define('LOGGED_IN_KEY', 'XeXv!)rLbiDacXS74W&Nr.,|/s7(ww9=Pj Nw=)SX(d}3BxI=r}%uB)h~O>cNF*d');
define('NONCE_KEY', 'IttOHF}JqC(9C7e{r>*xxKY}}~GkVe6&LA. b^ct(PZ$,8)y{ML^=M%c#tj5pn]s');
define('AUTH_SALT', '0>btnFo9=zA_[wixSJ@toQbK,]27+!*]od-FM2P{6%tO}aWvH-<K?1#S&_cmCp?E');
define('SECURE_AUTH_SALT', ';mjN1t@6Mmm?psni(IKFBB!X[BvHiGBuY`O(J%<f(C|l?bBC$U.]R]6o]&/U){Al');
define('LOGGED_IN_SALT', 'FAa6vZ~5,HY+&%*H&0XNj>rvqeHKo)R}Sf~N5*M%M-)t64~7Nc]aqyb0$jn4VD2A');
define('NONCE_SALT', '>)S-SK}!0fU>@I4HZnR/o>lO^ir:dF2h%cTD>A`Q5Tp]#Comm -O_3tK2HLK#wzQ');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


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

