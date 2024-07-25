<?php

namespace model;

class Specialite
{

    private $id;
    private $speLib;

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
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getSpeLib()
    {
        return $this->speLib;
    }

    /**
     * @param mixed $speLib
     */
    public function setSpeLib($speLib)
    {
        $this->speLib = $speLib;
    }




}