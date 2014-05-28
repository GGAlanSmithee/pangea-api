<?php

namespace Pangea\Models;

class TownRelation extends Model
{
    /**
     *
     * @var integer
     */
    protected $town_1_id;

    /**
     *
     * @var integer
     */
    protected $town_2_id;

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
     * Method to set the value of field town_1_id
     *
     * @param integer $town_1_id
     * @return $this
     */
    public function setTown1Id($town_1_id)
    {
        $this->town_1_id = $town_1_id;

        return $this;
    }

    /**
     * Method to set the value of field town_2_id
     *
     * @param integer $town_2_id
     * @return $this
     */
    public function setTown2Id($town_2_id)
    {
        $this->town_2_id = $town_2_id;

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
     * Returns the value of field town_1_id
     *
     * @return integer
     */
    public function getTown1Id()
    {
        return $this->town_1_id;
    }

    /**
     * Returns the value of field town_2_id
     *
     * @return integer
     */
    public function getTown2Id()
    {
        return $this->town_2_id;
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
        return "town_relation";
    }
}
