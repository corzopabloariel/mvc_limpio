<?php
/*
 * RUTA HTTP
 * Indica la ubicación del sistema.
 * Todo pasa por aquí.
 * -------------------
 * IMG DEFAULT
 * Ubiciación de un archivo imagen jpg para indiciar
 * la carencia de una propia definida.
 */

chdir(dirname(__DIR__));

define("SYS_PATH", "lib/");
define("APP_PATH", "app/");
define("RUTA_HTTP","http://localhost/ritossa/");
define("IMG_DEFAULT", "assets/images/default.jpg");

require SYS_PATH."init.php";
$app = new App;
