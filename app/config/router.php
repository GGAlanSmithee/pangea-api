<?php

use Phalcon\Mvc\Router;

$router = new Router();

$router->clear();
$router->removeExtraSlashes(true);

// Add default route
$router->add("/", array(
    "controller" => "index",
    "action" => "index",
));

// Add 404 route
$router->notFound(array(
    "controller" => "index",
    "action" => "index"
));

// Add route groups
$router->mount(new \Pangea\Routes\AccountRoutes());
$router->mount(new \Pangea\Routes\TownRoutes());
$router->mount(new \Pangea\Routes\RaceRoutes());

return $router;
