<?php

namespace Pangea\Api\Models;




class TownRelationship extends \Phalcon\Mvc\Model
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
    protected $relationship_type_id;
     
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
		$this->belongsTo("relationship_type_id", "Pangea\Api\Models\RelationshipType", "id", array("alias"=>'RelationshipType'));
		$this->belongsTo("town_1_id", "Pangea\Api\Models\Town", "id", array("alias"=>'Town'));
		$this->belongsTo("town_2_id", "Pangea\Api\Models\Town", "id", array("alias"=>'Town'));

    }

    public function getSource()
    {
        return 'town_relationship';
    }

}
