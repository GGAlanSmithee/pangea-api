<?php

namespace Pangea\Api\Models;




class Forum extends \Phalcon\Mvc\Model
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
     * Initialize method for model.
     */
    public function initialize()
    {
		$this->hasMany("id", "Pangea\Api\Models\Thread", "forum_id", array("alias"=>'Thread'));
		$this->belongsTo("clan_id", "Pangea\Api\Models\Clan", "id", array("alias"=>'Clan'));

    }

    public function getSource()
    {
        return 'forum';
    }

}
