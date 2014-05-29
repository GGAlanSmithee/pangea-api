<?php

use Phalcon\DI;
use Phalcon\DI\FactoryDefault;

ini_set('display_errors', 1);
error_reporting(E_ALL);

// Required for phalcon/incubator
include __DIR__ . "/../vendor/autoload.php";

// Create and register the autoloader
$loader = new \Phalcon\Loader();

$loader->registerNamespaces(array(
    "Pangea" => __DIR__ . "/../app/",
    "Pangea\Tests" => __DIR__ . "/"
));

$loader->register();

$di = new FactoryDefault();
DI::reset();

// Add any needed services to the DI here

DI::setDefault($di);
