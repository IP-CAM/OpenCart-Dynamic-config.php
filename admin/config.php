<?php
// HTTP
session_start();
define('HTTP_URL', $_SERVER['HTTP_HOST'].'/');
define('HTTP_SERVER', 'http://'.HTTP_URL.'admin/');
define('HTTP_CATALOG', 'http://'.HTTP_URL);

// HTTPS
define('HTTPS_SERVER', 'http://'.HTTP_URL.'admin/');
define('HTTPS_CATALOG', 'http://'.HTTP_URL);

// DIR
define('BASE_DIRECTORY', str_replace(DIRECTORY_SEPARATOR.'admin', '', realpath(dirname(__FILE__))));
define('DIR_APPLICATION', BASE_DIRECTORY.'/admin/');
define('DIR_SYSTEM', BASE_DIRECTORY.'/system/');
define('DIR_LANGUAGE', BASE_DIRECTORY.'/admin/language/');
define('DIR_TEMPLATE', BASE_DIRECTORY.'/admin/view/template/');
define('DIR_CONFIG', BASE_DIRECTORY.'/system/config/');
define('DIR_IMAGE', BASE_DIRECTORY.'/image/');
define('DIR_CACHE', BASE_DIRECTORY.'/system/cache/');
define('DIR_DOWNLOAD', BASE_DIRECTORY.'/system/download/');
define('DIR_UPLOAD', BASE_DIRECTORY.'/system/upload/');
define('DIR_LOGS', BASE_DIRECTORY.'/system/logs/');
define('DIR_MODIFICATION', BASE_DIRECTORY.'/system/modification/');
define('DIR_CATALOG', BASE_DIRECTORY.'/catalog/');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'opencart');
define('DB_PORT', '3306');
define('DB_PREFIX', 'oc_');
