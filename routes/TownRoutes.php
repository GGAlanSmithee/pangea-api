<?php

namespace Pangea\Api\Routes;

use Pangea\Api\Models\Town;

class TownRoutes extends \Phalcon\Mvc\Router\Group
{
    public function initialize()
    {
        // Default paths
        $this->setPaths(array(
            'module' => 'api',
            'controller' => 'town',
            'namespace' => 'Pangea\Api\Controllers'
        ));

        // All the routes start with /town
        $this->setPrefix('/api/towns');

        // Routes
        $this->add('', array('action' => 'index'));

        // CRUD
        $this->addGet   ('/:int', array('action' => 'details', 'id' => 1));
        $this->addDelete('/:int', array('action' => 'delete', 'id' => 1));
        $this->addPut   ('/:int', array('action' => 'update', 'id' => 1));
        $this->addPost  ('', array('action' => 'create'));

        // Town buildings
        $this->addGet('/:int/buildings', array(
            'action' => 'buildings',
            'town_id' => 1
        ));

        $this->addGet('/:int/buildings/:int', array(
            'action' => 'building',
            'town_id' => 1,
            'building_type_id' => 2
        ));

        // Town units
        $this->addGet('/:int/units', array(
            'action' => 'units',
            'town_id' => 1
        ));

        $this->addGet('/:int/units/:int', array(
            'action' => 'unit',
            'town_id' => 1,
            'unit_type_id' => 2
        ));

        // Town sciences
        $this->addGet('/:int/sciences', array(
            'action' => 'sciences',
            'town_id' => 1
        ));

        $this->addGet('/:int/sciences/:int', array(
            'action' => 'science',
            'town_id' => 1,
            'science_type_id' => 2
        ));
    }
}
