<?php

namespace Pangea\Api\Models;

class ClanRelationship extends \Phalcon\Mvc\Model
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
    protected $relationship_type_id;

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
     * Method to set the value of field relationship_type_id
     *
     * @param integer $relationship_type_id
     * @return $this
     */
    public function setRelationshipTypeId($relationship_type_id)
    {
        $this->relationship_type_id = $relationship_type_id;

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
     * Returns the value of field relationship_type_id
     *
     * @return integer
     */
    public function getRelationshipTypeId()
    {
        return $this->relationship_type_id;
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

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo("clan_1_id", "Pangea\Api\Models\Clan", "id", array("alias" => "Clan"));
        $this->belongsTo("clan_2_id", "Pangea\Api\Models\Clan", "id", array("alias" => "Clan"));
        $this->belongsTo("relationship_type_id", "Pangea\Api\Models\RelationshipType", "id", array("alias" => "RelationshipType"));
    }

    public function getSource()
    {
        return "clan_relationship";
    }

}
