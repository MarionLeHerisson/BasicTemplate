<?php
/**
 * Created by MarionLeHerisson
 * https://github.com/MarionLeHerisson/BasicTemplate
 * GNU GPL v3.0
 */

/* W I N D O W S   L O C A L   C O N F */
if($_SERVER['HTTP_HOST'] == 'localhost') {
    define('BASE_URL', 'localhost' . DIRECTORY_SEPARATOR . 'basic_template' . DIRECTORY_SEPARATOR . 'www' . DIRECTORY_SEPARATOR);
    define('BASE_PATH', 'C:' . DIRECTORY_SEPARATOR . 'wamp64' . DIRECTORY_SEPARATOR . 'www' . DIRECTORY_SEPARATOR .
        'basic_template' . DIRECTORY_SEPARATOR);
    define('HOSTNAME', 'localhost');
    define('DBNAME', 'basic_template');
    define('DBLOGIN', 'root');
    define('DBPWD', 'root');
    ini_set("display_errors", 1);
    define('DEBUG', 1);
}

/* P R O D U C T I O N   E N V */
else {
    require_once('prod_const.php');
}