<?php

namespace Pangea\Api\Models;

class Clan extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $id;

    /**
     *
     * @var string
     */
    protected $name;

    /**
     *
     * @var string
     */
    protected $country;

    /**
     *
     * @var string
     */
    protected $region;

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
     * Method to set the value of field name
     *
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Method to set the value of field country
     *
     * @param string $country
     * @return $this
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Method to set the value of field region
     *
     * @param string $region
     * @return $this
     */
    public function setRegion($region)
    {
        $this->region = $region;

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
     * Returns the value of field name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Returns the value of field country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Returns the value of field region
     *
     * @return string
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany("id", "Pangea\Api\Models\ClanRelationship", "clan_1_id", array("alias" => "ClanRelationship"));
        $this->hasMany("id", "Pangea\Api\Models\ClanRelationship", "clan_2_id", array("alias" => "ClanRelationship"));
        $this->hasMany("id", "Pangea\Api\Models\Forum", "clan_id", array("alias" => "Forum"));
        $this->hasMany("id", "Pangea\Api\Models\Town", "clan_id", array("alias" => "Town"));
    }

    public function getSource()
    {
        return "clan";
    }

}
