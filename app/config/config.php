<?php

$config = new \Phalcon\Config(array(
    "application" => array(
        "controllersDir" => "apps/api/controllers/",
        "modelsDir"      => "apps/api/models/",
        "baseUri"        => "/"
    )
));

$dbConfig = include __DIR__."/dbconfig.php";
$config->merge($dbConfig);

return $config;
