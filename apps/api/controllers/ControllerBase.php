<?php

namespace Pangea\Api\Controllers;

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

    protected function getJsonRequest()
    {
        $data = $this->request->getRawBody();
        return json_decode($data);
    }

    protected function imageResponse(\Phalcon\Image\Adapter $image)
    {
        $this->view->disable();

        $response = new \Phalcon\Http\Response();
        $response->setContentType($image->getMime());
        $response->setContent($image->render());

        return $response;
    }

    protected function jsonResponse($data)
    {
        $this->view->disable();

        $response = new \Phalcon\Http\Response();
        $response->setContentType("application/json", "UTF-8");
        $response->setContent(json_encode($data, JSON_PRETTY_PRINT | JSON_NUMERIC_CHECK));

        return $response;

    }

    protected function emptyJsonResponse()
    {
      return $this->jsonResponse(array());
    }
}
