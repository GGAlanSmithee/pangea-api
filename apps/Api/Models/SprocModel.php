<?php

namespace Pangea\Api\Models;

use Phalcon\Mvc\Model\Resultset\Simple as Resultset;

class SprocModel extends Model
{
    protected static function call_sproc($sql)
    {
        $class = new SprocModel();
        return new Resultset(null, $class, $class->getReadConnection()->query($sql));
    }
}
