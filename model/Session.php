<?php

namespace model;

class Session
{

    private $id;
    private $sessionUsername;
    private $sessionKey;
    private $sessionDate;
    private $sessionStatus;

    /**
     * @return mixed
     */
    public function getSessionStatus()
    {
        return $this->sessionStatus;
    }

    /**
     * @param mixed $sessionStatus
     */
    public function setSessionStatus($sessionStatus): void
    {
        $this->sessionStatus = $sessionStatus;
    }


    public function __construct()
    {
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getSessionUsername()
    {
        return $this->sessionUsername;
    }

    /**
     * @param mixed $sessionUsername
     */
    public function setSessionUsername($sessionUsername): void
    {
        $this->sessionUsername = $sessionUsername;
    }

    /**
     * @return mixed
     */
    public function getSessionKey()
    {
        return $this->sessionKey;
    }

    /**
     * @param mixed $sessionKey
     */
    public function setSessionKey($sessionKey): void
    {
        $this->sessionKey = $sessionKey;
    }

    /**
     * @return mixed
     */
    public function getSessionDate()
    {
        return $this->sessionDate;
    }

    /**
     * @param mixed $sessionDate
     */
    public function setSessionDate($sessionDate): void
    {
        $this->sessionDate = $sessionDate;
    }




}