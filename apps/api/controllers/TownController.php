<?php

namespace Pangea\Api\Controllers;

use Pangea\Api\Models\Town;
use Pangea\Api\Models\Building;
use Pangea\Api\Models\Unit;
use Pangea\Api\Models\Science;

class TownController extends ControllerBase
{

    public function indexAction()
    {
      return $this->jsonResponse(Town::find()->toArray());
    }

    public function detailsAction($id)
    {
      $result = Town::findFirst($id);
      return $result == null ? $this->emptyJsonResponse() : $this->jsonResponse($result->toArray());
    }
    
    public function deleteAction($id)
    {
      $response = new \Phalcon\Http\Response();
      $response->setStatusCode(200, "OK");
      $response->setContent("Town deleted");
      
      $town = findFirst($id);
      if (!$town)
      {
        $response->setStatusCode(204, "No Content");
        $response->setContent("");
      }
      else
      {
        if (!$town->delete())
        {
          $response->setStatusCode(403, "Forbidden");
          $response->setContent("Cannot delete town");
        }
      }
      
      return $response;
    }
    
    public function createAction($id)
    {
      //$town->save();
    }
    
    public function updateAction($id)
    {
      //$town->save();
    }
    
    public function buildingsAction($town_id)
    {
      return $this->jsonResponse(
        Building::query()
        ->where("town_id = ?1")
        ->bind(array(1 => $town_id))
        ->order("building_type_id")
        ->execute()
        ->toArray()
      );
    }
    
    public function buildingAction($town_id, $building_type_id)
    {
      return $this->jsonResponse(
        Building::query()
        ->where("town_id = ?1")
        ->andWhere("building_type_id = ?2")
        ->bind(array(1 => $town_id, 2 => $building_type_id))
        ->execute()
        ->toArray()
      );
    }
    
    public function unitsAction($town_id)
    {
      return $this->jsonResponse(
        Unit::query()
        ->where("town_id = ?1")
        ->bind(array(1 => $town_id))
        ->order("unit_type_id")
        ->execute()
        ->toArray()
      );
    }
    
    public function unitAction($town_id, $unit_type_id)
    {
      return $this->jsonResponse(
        Unit::query()
        ->where("town_id = ?1")
        ->andWhere("unit_type_id = ?2")
        ->bind(array(1 => $town_id, 2 => $unit_type_id))
        ->execute()
        ->toArray()
      );
    }
    
    public function sciencesAction($town_id)
    {
      return $this->jsonResponse(
        Science::query()
        ->where("town_id = ?1")
        ->bind(array(1 => $town_id))
        ->order("science_type_id")
        ->execute()
        ->toArray()
      );
    }
    
    public function scienceAction($town_id, $science_type_id)
    {
      return $this->jsonResponse(
        Science::query()
        ->where("town_id = ?1")
        ->andWhere("science_type_id = ?2")
        ->bind(array(1 => $town_id, 2 => $science_type_id))
        ->execute()
        ->toArray()
      );
    }
}

