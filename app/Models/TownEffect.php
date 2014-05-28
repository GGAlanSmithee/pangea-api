<?php

namespace Pangea\Models;

class TownEffect extends Model
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
    protected $effect_id;

    /**
     *
     * @var string
     */
    protected $create_time;

    /**
     *
     * @var integer
     */
    protected $duration;

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
     * Method to set the value of field effect_id
     *
     * @param integer $effect_id
     * @return $this
     */
    public function setEffectId($effect_id)
    {
        $this->effect_id = $effect_id;

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
     * Method to set the value of field duration
     *
     * @param integer $duration
     * @return $this
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;

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
     * Returns the value of field effect_id
     *
     * @return integer
     */
    public function getEffectId()
    {
        return $this->effect_id;
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
     * Returns the value of field duration
     *
     * @return integer
     */
    public function getDuration()
    {
        return $this->duration;
    }

    public function getSource()
    {
        return "town_effect";
    }
}
