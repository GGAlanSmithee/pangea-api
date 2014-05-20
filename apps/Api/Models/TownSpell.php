<?php

namespace Pangea\Api\Models;

class TownSpell extends Model
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
    protected $spell_id;

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
     * Method to set the value of field spell_id
     *
     * @param integer $spell_id
     * @return $this
     */
    public function setSpellId($spell_id)
    {
        $this->spell_id = $spell_id;

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
     * Returns the value of field spell_id
     *
     * @return integer
     */
    public function getSpellId()
    {
        return $this->spell_id;
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
        return "town_spell";
    }

}
