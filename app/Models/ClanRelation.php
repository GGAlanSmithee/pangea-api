<?php

namespace Pangea\Models;

class ClanRelation extends Model
{
    /**
     *
     * @var integer
     */
    protected $clan_1_id;

    /**
     *
     * @var integer
     */
    protected $clan_2_id;

    /**
     *
     * @var integer
     */
    protected $relation_type_id;

    /**
     *
     * @var string
     */
    protected $create_time;

    /**
     *
     * @var integer
     */
    protected $percent;

    /**
     * Method to set the value of field clan_1_id
     *
     * @param integer $clan_1_id
     * @return $this
     */
    public function setClan1Id($clan_1_id)
    {
        $this->clan_1_id = $clan_1_id;

        return $this;
    }

    /**
     * Method to set the value of field clan_2_id
     *
     * @param integer $clan_2_id
     * @return $this
     */
    public function setClan2Id($clan_2_id)
    {
        $this->clan_2_id = $clan_2_id;

        return $this;
    }

    /**
     * Method to set the value of field relation_type_id
     *
     * @param integer $relation_type_id
     * @return $this
     */
    public function setRelationTypeId($relation_type_id)
    {
        $this->relation_type_id = $relation_type_id;

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
     * Method to set the value of field percent
     *
     * @param integer $percent
     * @return $this
     */
    public function setPercent($percent)
    {
        $this->percent = $percent;

        return $this;
    }

    /**
     * Returns the value of field clan_1_id
     *
     * @return integer
     */
    public function getClan1Id()
    {
        return $this->clan_1_id;
    }

    /**
     * Returns the value of field clan_2_id
     *
     * @return integer
     */
    public function getClan2Id()
    {
        return $this->clan_2_id;
    }

    /**
     * Returns the value of field relation_type_id
     *
     * @return integer
     */
    public function getRelationTypeId()
    {
        return $this->relation_type_id;
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
     * Returns the value of field percent
     *
     * @return integer
     */
    public function getPercent()
    {
        return $this->percent;
    }

    public function getSource()
    {
        return "clan_relation";
    }
}
