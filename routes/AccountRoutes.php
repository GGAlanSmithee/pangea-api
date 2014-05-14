<?php

namespace Pangea\Api\Routes;

class AccountRoutes extends \Phalcon\Mvc\Router\Group
{
    public function initialize()
    {
        // Default paths
        $this->setPaths(array(
            "module" => "api",
            "controller" => "account",
            "namespace" => "Pangea\Api\Controllers",
        ));

        // All the routes start with /account
        $this->setPrefix("/api/account");

        // Routes
        $this->addPost("/authenticate", array("action" => "authenticate"));
        $this->addPost("/authenticate_with_token",
            array("action" => "authenticateWithToken"));
        $this->addGet("/deauthenticate", array("action" => "deauthenticate"));
        $this->addPost("/register", array("action" => "register"));
    }
}
