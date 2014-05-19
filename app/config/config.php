<?php

$config = new \Phalcon\Config(array(
    "application" => array(
        "controllersDir" => __DIR__ . "/../../apps/api/Controllers/",
        "modelsDir"      => __DIR__ . "/../../apps/api/Models/",
        "baseUri"        => "/"
    )
));

$dbConfig = include __DIR__."/dbconfig.php";
$config->merge($dbConfig);

return $config;
