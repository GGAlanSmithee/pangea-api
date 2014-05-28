<?php

namespace Pangea\Routes;

use Phalcon\Mvc\Router\Group as RouterGroup;
use Pangea\Models\Race;

class RaceRoutes extends RouterGroup
{
    public function initialize()
    {
        // Default paths
        $this->setPaths(array(
            "controller" => "race",
            "namespace" => "Pangea\Controllers"
        ));

        // All the routes start with /races
        $this->setPrefix("/races");

        // Routes
        $this->addGet("", array("action" => "index"));
        $this->addGet("/:int", array("action" => "details", "id" => 1));
    }
}
