<?php

namespace Pangea\Controllers;

use Pangea\Models\Building;
use Pangea\Models\BuildingType;

class BuildingController extends ControllerBase
{
    public function indexAction()
    {
        return $this->jsonResponse(Building::find()->toArray());
    }
}
