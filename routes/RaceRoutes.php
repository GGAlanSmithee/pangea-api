<?php

namespace Pangea\Api\Routes;

use Pangea\Api\Models\Race;

class RaceRoutes extends \Phalcon\Mvc\Router\Group
{
    public function initialize()
    {
        // Default paths
        $this->setPaths(array(
            'module' => 'api',
            'controller' => 'race',
            'namespace' => 'Pangea\Api\Controllers'
        ));

        // All the routes start with /races
        $this->setPrefix('/api/races');

        // Routes
        $this->add('', array('action' => 'index'));

        // CRUD
        $this->addGet   ('/:int', array('action' => 'details', 'id' => 1));
        //$this->addDelete('/:int', array('action' => 'delete', 'id' => 1));
        //$this->addPut   ('/:int', array('action' => 'update', 'id' => 1));
        //$this->addPost  ('', array('action' => 'create'));
    }
}
