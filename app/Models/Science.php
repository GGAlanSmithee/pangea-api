<?php

namespace Pangea\Models;

class Science extends Model
{
    /**
     *
     * @var integer
     */
    protected $id;

    /**
     *
     * @var integer
     */
    protected $science_type_id;

    /**
     *
     * @var integer
     */
    protected $town_id;

    /**
     *
     * @var string
     */
    protected $create_time;

    /**
     *
     * @var integer
     */
    protected $construction_time;

    /**
     * Method to set the value of field id
     *
     * @param integer $id
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;

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
     * Method to set the value of field construction_time
     *
     * @param integer $construction_time
     * @return $this
     */
    public function setConstructionTime($construction_time)
    {
        $this->construction_time = $construction_time;

        return $this;
    }

    /**
     * Returns the value of field id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
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
     * Returns the value of field town_id
     *
     * @return integer
     */
    public function getTownId()
    {
        return $this->town_id;
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

    /**
     * Returns the value of field construction_time
     *
     * @return integer
     */
    public function getConstructionTime()
    {
        return $this->construction_time;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo("science_type_id", "Pangea\Models\ScienceType", "id", array("alias" => "ScienceType"));
        $this->belongsTo("town_id", "Pangea\Models\Town", "id", array("alias" => "Town"));
    }

    public function getSource()
    {
        return "science";
    }
}
