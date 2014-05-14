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

    protected function respondWithStatusCode($code = 200, $message = null)
    {
        $statusCodeMessages = array(
            200 => "OK",
            201 => "Created",
            202 => "Accepted",
            301 => "Moved Permanently",
            302 => "Found",
            303 => "See Other",
            304 => "Not Modified",
            400 => "Bad Request",
            401 => "Unauthorized",
            403 => "Forbidden",
            404 => "Not Found",
            409 => "Conflict",
            500 => "Internal Server Error",
            501 => "Not Implemented",
            503 => "Service Unavailable",
        );

        $this->view->disable();

        $response = new \Phalcon\Http\Response();
        $response->setStatusCode($code, $statusCodeMessages[$code]);

        if ($this->request->isAjax())
        {
            $data = new \stdClass();
            $data->message = $message;

            $response->setContentType("application/json", "UTF-8");
            $response->setJsonContent($data, JSON_PRETTY_PRINT);
        }
        else
        {
            $response->setContent($message);
        }

        return $response;
    }
}
