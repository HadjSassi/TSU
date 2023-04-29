<?php

namespace Model;

class Users
{
    public $maiUser;
    public $username;
    public $pass;
    public $functionality;
    public $tel;
    public $firstName;
    public $lastName;
    public $job;

    /**
     * @param $maiUser
     * @param $username
     * @param $pass
     * @param $functionality
     * @param $tel
     * @param $firstName
     * @param $lastName
     * @param $job
     */
    public function __construct($maiUser, $username, $pass, $functionality, $tel, $firstName, $lastName, $job)
    {
        $this->maiUser = $maiUser;
        $this->username = $username;
        $this->pass = $pass;
        $this->functionality = $functionality;
        $this->tel = $tel;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->job = $job;
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
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param mixed $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param mixed $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * @return mixed
     */
    public function getJob()
    {
        return $this->job;
    }

    /**
     * @param mixed $job
     */
    public function setJob($job)
    {
        $this->job = $job;
    }




}