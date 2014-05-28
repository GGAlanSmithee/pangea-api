<?php

namespace Pangea\Models;

class Forum extends Model
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
    protected $clan_id;

    /**
     *
     * @var string
     */
    protected $create_time;

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
     * Returns the value of field id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
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
        return "forum";
    }
}
