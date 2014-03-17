<?php

namespace Pangea\Api\Models;




class Thread extends \Phalcon\Mvc\Model
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
    protected $town_id;
     
    /**
     *
     * @var integer
     */
    protected $forum_id;
     
    /**
     *
     * @var string
     */
    protected $title;
     
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
     * Method to set the value of field forum_id
     *
     * @param integer $forum_id
     * @return $this
     */
    public function setForumId($forum_id)
    {
        $this->forum_id = $forum_id;

        return $this;
    }

    /**
     * Method to set the value of field title
     *
     * @param string $title
     * @return $this
     */
    public function setTitle($title)
    {
        $this->title = $title;

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
     * Returns the value of field town_id
     *
     * @return integer
     */
    public function getTownId()
    {
        return $this->town_id;
    }

    /**
     * Returns the value of field forum_id
     *
     * @return integer
     */
    public function getForumId()
    {
        return $this->forum_id;
    }

    /**
     * Returns the value of field title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
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
     * Initialize method for model.
     */
    public function initialize()
    {
		$this->hasMany("id", "Pangea\Api\Models\Post", "thread_id", array("alias"=>'Post'));
		$this->belongsTo("forum_id", "Pangea\Api\Models\Forum", "id", array("alias"=>'Forum'));
		$this->belongsTo("town_id", "Pangea\Api\Models\Town", "id", array("alias"=>'Town'));

    }

    public function getSource()
    {
        return 'thread';
    }

}
