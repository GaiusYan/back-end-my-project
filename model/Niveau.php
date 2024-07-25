<?php

namespace model;

class Niveau
{

    private $id;
    private $nivLib;

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
    public function getNivLib()
    {
        return $this->nivLib;
    }

    /**
     * @param mixed $nivLib
     */
    public function setNivLib($nivLib)
    {
        $this->nivLib = $nivLib;
    }


}