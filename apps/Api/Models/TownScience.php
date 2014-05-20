<?php

namespace Pangea\Api\Models;

class TownScience extends Model
{

    /**
     *
     * @var integer
     */
    protected $town_id;

    /**
     *
     * @var integer
     */
    protected $science_type_id;

    /**
     *
     * @var string
     */
    protected $create_time;

    /**
     * Method to set the value of field town_id
     *
     * @param integer $town_id
     * @return $this
     */
    public function setTownId($town_id)
    {
        $this->town_id = $town_id;

        return $this;
    }

    /**
     * Method to set the value of field science_type_id
     *
     * @param integer $science_type_id
     * @return $this
     */
    public function setScienceTypeId($science_type_id)
    {
        $this->science_type_id = $science_type_id;

        return $this;
    }

    /**
     * Method to set the value of field create_time
     *
     * @param string $create_time
     * @return $this
     */
    public function setCreateTime($create_time)
    {
        $this->create_time = $create_time;

        return $this;
    }

    /**
     * Returns the value of field town_id
     *
     * @return integer
     */
    public function getTownId()
    {
        return $this->town_id;
    }

    /**
     * Returns the value of field science_type_id
     *
     * @return integer
     */
    public function getScienceTypeId()
    {
        return $this->science_type_id;
    }

    /**
     * Returns the value of field create_time
     *
     * @return string
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    public function getSource()
    {
        return "town_science";
    }

}
