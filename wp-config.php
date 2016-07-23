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
define('DB_NAME', 'kine_wp_blog');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'yojotaman');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'admin');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY', '.er=e]6VY*}c)<Ra/MoUg d6[O3vU>X/B7FE(1y>Fz;@@?[4Q~k_iGcx/2=&huW/');
define('SECURE_AUTH_KEY', '6.oI!SkUa&.}(JnGDEx?9-i*xQSUF4>`C@v68M*t&$je*w^)?s*{wlB(j{H`:Wu{');
define('LOGGED_IN_KEY', '>[)UY-Rq<7[eBxm?0Bbt;6D86cp5V;5cS6QcYw:N*EG,sP$4:fl8!=rM#zk}4|S~');
define('NONCE_KEY', '3xt2 sphmn}KBF((i*(Y~MXUmP<]!{,h(aEkbB.jClo3)!Y^@-KD^uN]Z4.$oa!8');
define('AUTH_SALT', 'W+-JWTeGd_,z%>Ggc[)KWxWAh_?O,btmv4q}Ld.ro*70MDu^C0~7oo<oOvO1%z;s');
define('SECURE_AUTH_SALT', 'c?KdG?l/J*Dtc,IjJ/8-CwqZ^dRXUeXpXP:F8<BpBJ*Kg=]s?X~XU_?Xax(9wpcs');
define('LOGGED_IN_SALT', '  /)M0+g/KC.Zat.~B=Cd7;-~q~rks=h+u.krk}c9q_E_:BwKL/*RUZNQt,V9@eG');
define('NONCE_SALT', 'PQqWQpwn`Af5WDmT}#)3D|,:+=R6T@Q:vL`P|Bf|Ze-+3FNgd)3obdR;fP#vGNF$');

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

