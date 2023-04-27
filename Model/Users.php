<?php

namespace Model;

class Users{
    public $maiUser;
    public $username;
    public $pass;
    public $functionality;
    public $tel;
    public $location;

    /**
     * @param $maiUser
     * @param $username
     * @param $pass
     * @param $functionality
     * @param $tel
     * @param $location
     */
    public function __construct($maiUser, $username, $pass, $functionality, $tel, $location)
    {
        $this->maiUser = $maiUser;
        $this->username = $username;
        $this->pass = $pass;
        $this->functionality = $functionality;
        $this->tel = $tel;
        $this->location = $location;
    }

    /**
     * @return mixed
     */
    public function getMaiUser()
    {
        return $this->maiUser;
    }

    /**
     * @param mixed $maiUser
     */
    public function setMaiUser($maiUser)
    {
        $this->maiUser = $maiUser;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @return mixed
     */
    public function getPass()
    {
        return $this->pass;
    }

    /**
     * @param mixed $pass
     */
    public function setPass($pass)
    {
        $this->pass = $pass;
    }

    /**
     * @return mixed
     */
    public function getFunctionality()
    {
        return $this->functionality;
    }

    /**
     * @param mixed $functionality
     */
    public function setFunctionality($functionality)
    {
        $this->functionality = $functionality;
    }

    /**
     * @return mixed
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * @param mixed $tel
     */
    public function setTel($tel)
    {
        $this->tel = $tel;
    }

    /**
     * @return mixed
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @param mixed $location
     */
    public function setLocation($location)
    {
        $this->location = $location;
    }



}