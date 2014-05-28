<?php

// Create and register the autoloader
$loader = new \Phalcon\Loader();

$loader->registerNamespaces(array(
    "Pangea" => __DIR__ . "/../",
));

$loader->register();
