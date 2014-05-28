<?php

namespace Pangea\Routes;

use Phalcon\Mvc\Router\Group as RouteGroup;

class AccountRoutes extends RouteGroup
{
    public function initialize()
    {
        // Default paths
        $this->setPaths(array(
            "controller" => "account",
            "namespace" => "Pangea\Controllers",
        ));

        // All the routes start with /account
        $this->setPrefix("/account");

        // Routes
        $this->addPost("/authenticate", array("action" => "authenticate"));
        $this->addPost(
            "/authenticate_with_token",
            array("action" => "authenticateWithToken")
        );
        $this->addGet("/deauthenticate", array("action" => "deauthenticate"));
        $this->addPost("/register", array("action" => "register"));
    }
}
