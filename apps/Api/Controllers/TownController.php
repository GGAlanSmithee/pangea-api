<?php

namespace Pangea\Api\Controllers;

use Pangea\Api\Models\Town;
use Pangea\Api\Models\Building;
use Pangea\Api\Models\Unit;
use Pangea\Api\Models\Science;
use Pangea\Api\Web\HttpStatusCode;

class TownController extends ControllerBase
{
    public function indexAction()
    {
        return $this->jsonResponse(Town::find()->toArray());
    }

    public function detailsAction($id)
    {
        $town = Town::findFirst($id);
        return $town == null
            ? $this->respondWithStatusCode(HttpStatusCode::NOT_FOUND,
                "Town not found.")
            : $this->jsonResponse($town->toArray());
    }

    public function deleteAction($id)
    {
        $response = new \Phalcon\Http\Response();
        $response->setStatusCode(200, "OK");
        $response->setContent("Town deleted");

        $town = Town::findFirst($id);
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

    public function createAction()
    {
        $data = $this->getJsonRequest();

        $town = new Town();
        $town->setUserId($data->user_id);
        $town->setClanId($data->clan_id);
        $town->setRaceId($data->race_id);
        $town->setPersonalityId($data->personality_id);
        $town->setName($data->name);
        $town->setRulerName($data->ruler_name);
        $town->save();

        return $this->jsonResponse($town->toArray());
    }

    public function updateAction($id)
    {
        $data = $this->getJsonRequest();

        $town = Town::findFirst($id);
        $town->setUserId($data->user_id);
        $town->setClanId($data->clan_id);
        $town->setRaceId($data->race_id);
        $town->setPersonalityId($data->personality_id);
        $town->setName($data->name);
        $town->setRulerName($data->ruler_name);
        $town->save();

        return $this->jsonResponse($town->toArray());
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
