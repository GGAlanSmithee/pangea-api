<?php

namespace Pangea\Controllers;

use Pangea\Web\HttpStatusCode;

class ControllerBase extends \Phalcon\Mvc\Controller
{
    protected function clientAcceptsJson()
    {
        foreach ($this->request->getAcceptableContent() as $contentType)
        {
            if ($contentType["accept"] == "application/json")
            {
                return true;
            }
        }

        return false;
    }

    protected function forward($uri)
    {
        $uriParts = explode("/", $uri);

        $this->dispatcher->forward(
            array(
                "controller" => $uriParts[0],
                "action" => $uriParts[1]
            )
        );
    }

    protected function getJsonRequest()
    {
        return $this->request->getJsonRawBody();
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
        $response->setContentType("application/json", "utf-8");
        $response->setJsonContent($data, JSON_PRETTY_PRINT | JSON_NUMERIC_CHECK);

        return $response;
    }

    protected function emptyJsonResponse()
    {
        return $this->jsonResponse(array());
    }

    protected function respondWithStatusCode($code = HttpStatusCode::OK, $message = null)
    {
        $this->view->disable();

        $response = new \Phalcon\Http\Response();
        $response->setStatusCode($code, HttpStatusCode::getMessage($code));

        if ($this->request->isAjax() || $this->clientAcceptsJson())
        {
            $data = new \stdClass();
            $data->message = $message;

            $response->setContentType("application/json", "utf-8");
            $response->setJsonContent($data, JSON_PRETTY_PRINT | JSON_NUMERIC_CHECK);
        }
        else
        {
            $response->setContent($message);
        }

        return $response;
    }
}
