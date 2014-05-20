<?php

$router = new \Phalcon\Mvc\Router();

$router->removeExtraSlashes(true);
$router->setDefaultModule("frontend");

$router->add("/api", array(
    "module" => "api",
    "controller" => "index",
    "action" => "index",
));

// Route groups
$router->mount(new \Pangea\Api\Routes\AccountRoutes());
$router->mount(new \Pangea\Api\Routes\TownRoutes());
$router->mount(new \Pangea\Api\Routes\RaceRoutes());

return $router;
