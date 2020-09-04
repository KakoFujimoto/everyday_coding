<?php

ini_set('display_errors', 1);

define('DSN', 'mysql:dbhost=localhost;dbname=LOGIN');
define('DB_USERNAME', 'dbuser');
define('DB_PASSWORD', 'suyrw2');

require_once(__DIR__ . '/../lib/functions.php');
require_once(__DIR__ . '/autoload.php');

session_start();
