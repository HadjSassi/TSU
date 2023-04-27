<?php

namespace Model;

class Event{
    public $idEvent;
    public $titleEvent;
    public $typeEvent;
    public $descriptions;
    public $startingDate;
    public $endingDate;

    /**
     * @param $idEvent
     * @param $titleEvent
     * @param $typeEvent
     * @param $descriptions
     * @param $startingDate
     * @param $endingDate
     */
    public function __construct($idEvent, $titleEvent, $typeEvent, $descriptions, $startingDate, $endingDate)
    {
        $this->idEvent = $idEvent;
        $this->titleEvent = $titleEvent;
        $this->typeEvent = $typeEvent;
        $this->descriptions = $descriptions;
        $this->startingDate = $startingDate;
        $this->endingDate = $endingDate;
    }

    /**
     * @return mixed
     */
    public function getIdEvent()
    {
        return $this->idEvent;
    }

    /**
     * @param mixed $idEvent
     */
    public function setIdEvent($idEvent)
    {
        $this->idEvent = $idEvent;
    }

    /**
     * @return mixed
     */
    public function getTitleEvent()
    {
        return $this->titleEvent;
    }

    /**
     * @param mixed $titleEvent
     */
    public function setTitleEvent($titleEvent)
    {
        $this->titleEvent = $titleEvent;
    }

    /**
     * @return mixed
     */
    public function getTypeEvent()
    {
        return $this->typeEvent;
    }

    /**
     * @param mixed $typeEvent
     */
    public function setTypeEvent($typeEvent)
    {
        $this->typeEvent = $typeEvent;
    }

    /**
     * @return mixed
     */
    public function getDescriptions()
    {
        return $this->descriptions;
    }

    /**
     * @param mixed $descriptions
     */
    public function setDescriptions($descriptions)
    {
        $this->descriptions = $descriptions;
    }

    /**
     * @return mixed
     */
    public function getStartingDate()
    {
        return $this->startingDate;
    }

    /**
     * @param mixed $startingDate
     */
    public function setStartingDate($startingDate)
    {
        $this->startingDate = $startingDate;
    }

    /**
     * @return mixed
     */
    public function getEndingDate()
    {
        return $this->endingDate;
    }

    /**
     * @param mixed $endingDate
     */
    public function setEndingDate($endingDate)
    {
        $this->endingDate = $endingDate;
    }


}