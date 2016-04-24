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
define('DB_NAME', 'test');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

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
define('AUTH_KEY', 'S2J`TY@4. -nMzXQK%W#i$(DYz(5CAw:n3AcoI @SRl;m`)YEY`)2d{8;+dc*M%l');
define('SECURE_AUTH_KEY', 'u1m`iKr/]pWuJFCU[W?GR-eT=q{zGp@e|/&()U&*M3]~gnIi5&*9ldg@L[]5|8`Y');
define('LOGGED_IN_KEY', '4I0-s>?}TCzR%6XrOQ}Q%&CS{@?.gSc$_d_7uy>kFRENH[]>WsYXD>!W9|czQN[#');
define('NONCE_KEY', ':vHmZ>Fv<$.@~l%jT+$K.ZUhQZpp1Fyi4 >!J;ym{f=]k8Y)49rxxxO%}PXg4l77');
define('AUTH_SALT', 'l*l>d%wR6.%Nf~F]p{~Iuks`Y^$o.CSZx+M6U&Wq,;XY5/PrC.HkH};-gGDeVBu=');
define('SECURE_AUTH_SALT', '5m}1IpB/y]1PP!:2],[!<w4oabhq(B(U$J>K2[5!r]%W]%mIUxW*3_HJ+HR*.%/1');
define('LOGGED_IN_SALT', 'Y6=Rw[)4z&JEsbLzM|ceg8;>abBZRW4g5V@lcz;?3}-F6PQoc*,J(VEh6KL0qN&n');
define('NONCE_SALT', 'Rbz&VRTP/-6aU(t:79s2~a&[2}jARoFFS}k8Mra8&tpR]md:E!$meMoD/83W^YDY');

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

