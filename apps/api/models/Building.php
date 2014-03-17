<?php

namespace Pangea\Api\Models;

class Building extends SprocModel
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
    protected $building_type_id;
     
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
     * Method to set the value of field building_type_id
     *
     * @param integer $building_type_id
     * @return $this
     */
    public function setBuildingTypeId($building_type_id)
    {
        $this->building_type_id = $building_type_id;

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
     * Returns the value of field building_type_id
     *
     * @return integer
     */
    public function getBuildingTypeId()
    {
        return $this->building_type_id;
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
		$this->belongsTo("building_type_id", "Pangea\Api\Models\BuildingType", "id", array("alias"=>'BuildingType'));
		$this->belongsTo("town_id", "Pangea\Api\Models\Town", "id", array("alias"=>'Town'));

    }

    public function getSource()
    {
        return 'building';
    }
    
    /**
     * Stored procedures
     */
    public static function get_town_buildings($town_id)
    {
      return Building::call_sproc("CALL get_town_buildings('$town_id');");
    }
    
    public static function get_town_building($town_id, $building_type_id)
    {
      return Building::call_sproc("CALL get_town_building('$town_id', '$building_type_id');");
    }
}
