<?php

ini_set('display_errors', 1);

define('DSN', 'mysql:dbhost=localhost;dbname=kako_sns');
define('DB_USERNAME', 'dbuser');
define('DB_PASSWORD', 'huhso4293079');

require_once(__DIR__ . '/../lib/functions.php');
require_once(__DIR__ . '/../lib/autoload.php');

session_start();
