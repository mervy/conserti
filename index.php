<?php

session_start();
ini_set("display_errors", 1);


date_default_timezone_set("America/Sao_Paulo");

//Para urls absolutas
define('WEB_ROOT', '');

define('CONTROLLERS', 'app/controllers/');
define('VIEWS', 'app/views/');
define('MODELS', 'app/models/');
define('HELPERS', 'system/helpers/');

require_once('system/system.php');
require_once('system/controller.php');
require_once('system/model.php');

function __autoload($file) {
    if (file_exists(MODELS . $file . '.php')) {
        require_once( MODELS . $file . '.php' );
    } else if (file_exists(HELPERS . $file . '.php')) {
        require_once( HELPERS . $file . '.php' );
    } else {
        die("Model ou Helper nao encontrado.");
    }
}

$start = new System;
$start->run();
