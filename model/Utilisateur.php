<?php

namespace model;

class Utilisateur extends Personne
{
    private $connected;
    private $disconnected ;
    private $password;
    private $username;
    private $role;

    /**
     * @return mixed
     */
    public function getConnected()
    {
        return $this->connected;
    }

    /**
     * @param mixed $connected
     */
    public function setConnected($connected)
    {
        $this->connected = $connected;
    }

    /**
     * @return mixed
     */
    public function getDisconnected()
    {
        return $this->disconnected;
    }

    /**
     * @param mixed $disconnected
     */
    public function setDisconnected($disconnected)
    {
        $this->disconnected = $disconnected;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
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
    public function getRole()
    {
        return $this->role;
    }

    /**
     * @param mixed $role
     */
    public function setRole($role)
    {
        $this->role = $role;
    }




    public function getNomPrenom(){
        return $this->getNom().' '.$this->getPrenom();
    }




}