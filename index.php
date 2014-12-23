<?php
/* Index file, does all the good stuff. */

/* Conf */
ini_set('display_errors', 1);

DEFINE('SITE_PATH', realpath(dirname(__FILE__)) . '/');
DEFINE('SYSTEM_PATH', SITE_PATH . 'system/');
DEFINE('APP_PATH', SITE_PATH . 'application/');

require_once(SYSTEM_PATH . 'karamba.php');

Router::route(new Request());