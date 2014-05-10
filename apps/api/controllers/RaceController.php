<?php

namespace Pangea\Api\Controllers;

use Pangea\Api\Models\Race;

class RaceController extends ControllerBase
{
    public function indexAction()
    {
      return $this->jsonResponse(Race::find()->toArray());
    }

    public function detailsAction($id)
    {
      $race = Race::findFirst($id);
      return $race == null ? $this->emptyJsonResponse() : $this->jsonResponse($race->toArray());
    }
}

