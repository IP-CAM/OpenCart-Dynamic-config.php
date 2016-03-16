<?php
// HTTP
session_start();
define('HTTP_URL', $_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']));
define('HTTP_SERVER', 'http://'.HTTP_URL);

// HTTPS
define('HTTPS_SERVER', 'http://'.HTTP_URL);

// DIR
define('BASE_DIRECTORY', realpath(dirname(__FILE__)));
define('DIR_APPLICATION', BASE_DIRECTORY.'/catalog/');
define('DIR_SYSTEM', BASE_DIRECTORY.'/system/');
define('DIR_LANGUAGE', BASE_DIRECTORY.'/catalog/language/');
define('DIR_TEMPLATE', BASE_DIRECTORY.'/catalog/view/theme/');
define('DIR_CONFIG', BASE_DIRECTORY.'/system/config/');
define('DIR_IMAGE', BASE_DIRECTORY.'/image/');
define('DIR_CACHE', BASE_DIRECTORY.'/system/cache/');
define('DIR_DOWNLOAD', BASE_DIRECTORY.'/system/download/');
define('DIR_UPLOAD', BASE_DIRECTORY.'/system/upload/');
define('DIR_MODIFICATION', BASE_DIRECTORY.'/system/modification/');
define('DIR_LOGS', BASE_DIRECTORY.'/system/logs/');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'opencart');
define('DB_PORT', '3306');
define('DB_PREFIX', 'oc_');
?>
