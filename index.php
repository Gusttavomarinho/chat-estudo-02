<?php
session_start();
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);
require 'config.php';
require 'vendor/autoload.php';

$core = new Core\Core();
$core->run();