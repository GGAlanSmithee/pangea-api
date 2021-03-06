<?php

namespace Pangea\Models;

class Town extends Model
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
    protected $create_time;

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
     * Returns the value of field create_time
     *
     * @return string
     */
    public function getCreateTime()
    {
        return $this->create_time;
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

    public function getSource()
    {
        return "town";
    }
}
