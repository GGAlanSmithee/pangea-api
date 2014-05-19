<?php

namespace Pangea\Frontend\Controllers;

class ControllerBase extends \Phalcon\Mvc\Controller
{
    protected function forward($uri)
    {
        $uriParts = explode("/", $uri);

        var_dump($uriParts);

        $this->dispatcher->forward(
            array(
                "controller" => $uriParts[0],
                "action" => $uriParts[1]
            )
        );
    }
}
