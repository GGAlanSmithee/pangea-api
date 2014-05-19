<?php

$config = new \Phalcon\Config(array(
    "application" => array(
        "controllersDir" => __DIR__ . "/../../apps/api/controllers/",
        "modelsDir"      => __DIR__ . "/../../apps/api/models/",
        "baseUri"        => "/"
    )
));

$dbConfig = include __DIR__."/dbconfig.php";
$config->merge($dbConfig);

return $config;
