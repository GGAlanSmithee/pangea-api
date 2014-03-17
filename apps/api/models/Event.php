<?php

namespace Pangea\Api\Models;




class Event extends \Phalcon\Mvc\Model
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
     * @var string
     */
    protected $text;
     
    /**
     *
     * @var string
     */
    protected $create_time;
     
    /**
     *
     * @var string
     */
    protected $is_read;
     
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
     * Method to set the value of field text
     *
     * @param string $text
     * @return $this
     */
    public function setText($text)
    {
        $this->text = $text;

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
     * Method to set the value of field is_read
     *
     * @param string $is_read
     * @return $this
     */
    public function setIsRead($is_read)
    {
        $this->is_read = $is_read;

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
     * Returns the value of field text
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
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
     * Returns the value of field is_read
     *
     * @return string
     */
    public function getIsRead()
    {
        return $this->is_read;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
		$this->belongsTo("town_id", "Pangea\Api\Models\Town", "id", array("alias"=>'Town'));

    }

    public function getSource()
    {
        return 'event';
    }

}
