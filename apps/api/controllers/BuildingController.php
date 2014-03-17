<?php

namespace Pangea\Api\Controllers;

use Pangea\Api\Models\Building;
use Pangea\Api\Models\BuildingType;

class BuildingController extends ControllerBase
{

  public function indexAction()
  {
    $this->view->disable();
    return $this->jsonResponse(Building::find()->toArray());
  }

  public function addAction($id)
  {
    $this->view->disable();
    echo json_encode(array(
      'id' => 'a'
    ));
  }
}