<?php

namespace Pangea\Frontend\Controllers;

class ResponseController extends ControllerBase
{

  private final function notFoundResponse($code, $statusMessage, $errorMessage)
  {
    $this->view->disable();
    
    $response = new \Phalcon\Http\Response();
    $response->setStatusCode($code, $statusMessage);
    
    if ($this->request->isAjax()) {
      $error = new \stdClass();
      $error->error = $errorMessage;
              
      $response->setContentType("application/json", "UTF-8");
      $response->setContent(json_encode($error, JSON_PRETTY_PRINT));
    } else {
      $response->setContent($errorMessage);
    }
    
    return $response;
  }
  
  public function notFoundAction()
  {
    return $this->notFoundResponse(404, "Not Found", "404 - Page Not Found.");
  }
}