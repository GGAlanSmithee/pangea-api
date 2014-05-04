<?php

namespace Pangea\Api\Models;




class Town extends \Phalcon\Mvc\Model
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
    protected $user_id;
     
    /**
     *
     * @var integer
     */
    protected $clan_id;
     
    /**
     *
     * @var integer
     */
    protected $race_id;
     
    /**
     *
     * @var integer
     */
    protected $personality_id;
     
    /**
     *
     * @var string
     */
    protected $name;
     
    /**
     *
     * @var string
     */
    protected $ruler_name;
     
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
     * Method to set the value of field user_id
     *
     * @param integer $user_id
     * @return $this
     */
    public function setUserId($user_id)
    {
        $this->user_id = $user_id;

        return $this;
    }

    /**
     * Method to set the value of field clan_id
     *
     * @param integer $clan_id
     * @return $this
     */
    public function setClanId($clan_id)
    {
        $this->clan_id = $clan_id;

        return $this;
    }

    /**
     * Method to set the value of field race_id
     *
     * @param integer $race_id
     * @return $this
     */
    public function setRaceId($race_id)
    {
        $this->race_id = $race_id;

        return $this;
    }

    /**
     * Method to set the value of field personality_id
     *
     * @param integer $personality_id
     * @return $this
     */
    public function setPersonalityId($personality_id)
    {
        $this->personality_id = $personality_id;

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
     * Method to set the value of field ruler_name
     *
     * @param string $ruler_name
     * @return $this
     */
    public function setRulerName($ruler_name)
    {
        $this->ruler_name = $ruler_name;

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
     * Returns the value of field user_id
     *
     * @return integer
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * Returns the value of field clan_id
     *
     * @return integer
     */
    public function getClanId()
    {
        return $this->clan_id;
    }

    /**
     * Returns the value of field race_id
     *
     * @return integer
     */
    public function getRaceId()
    {
        return $this->race_id;
    }

    /**
     * Returns the value of field personality_id
     *
     * @return integer
     */
    public function getPersonalityId()
    {
        return $this->personality_id;
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
     * Returns the value of field ruler_name
     *
     * @return string
     */
    public function getRulerName()
    {
        return $this->ruler_name;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
  		$this->hasMany("id", "Pangea\Api\Models\Building", "town_id", array("alias"=>'Building'));
  		$this->hasMany("id", "Pangea\Api\Models\Event", "town_id", array("alias"=>'Event'));
  		$this->hasMany("id", "Pangea\Api\Models\Post", "town_id", array("alias"=>'Post'));
  		$this->hasMany("id", "Pangea\Api\Models\Science", "town_id", array("alias"=>'Science'));
  		$this->hasMany("id", "Pangea\Api\Models\Thread", "town_id", array("alias"=>'Thread'));
  		$this->hasMany("id", "Pangea\Api\Models\TownRelationship", "town_1_id", array("alias"=>'TownRelationship'));
  		$this->hasMany("id", "Pangea\Api\Models\TownRelationship", "town_2_id", array("alias"=>'TownRelationship'));
  		$this->hasMany("id", "Pangea\Api\Models\Unit", "town_id", array("alias"=>'Unit'));
  		$this->belongsTo("clan_id", "Pangea\Api\Models\Clan", "id", array("alias"=>'Clan'));
  		$this->belongsTo("personality_id", "Pangea\Api\Models\Personality", "id", array("alias"=>'Personality'));
  		$this->belongsTo("race_id", "Pangea\Api\Models\Race", "id", array("alias"=>'Race'));
  		$this->belongsTo("user_id", "Pangea\Api\Models\User", "id", array("alias"=>'User'));
    }

    public function getSource()
    {
        return 'town';
    }
    
    public function toStdClass()
    {
      $object = new \stdClass;
      $object->id = $this->getId();
      $object->name = $this->getName();
      $object->ruler = $this->getRulerName();
      $object->race = $this->race->getName();
      $object->personality = $this->personality->getName();
      $object->clan = $this->clan->getName();
    
      return $object;
    }
}
