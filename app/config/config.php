<?php

$config = new \Phalcon\Config(array(
    "application" => array(
        "controllersDir" => __DIR__ . "/../../apps/Api/Controllers/",
        "modelsDir"      => __DIR__ . "/../../apps/Api/Models/",
        "baseUri"        => "/"
    )
));

$dbConfig = include __DIR__."/dbconfig.php";
$config->merge($dbConfig);

return $config;
