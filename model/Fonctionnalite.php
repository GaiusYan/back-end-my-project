<?php

namespace model;

class Fonctionnalite
{
    private $id;
    private $foncLib;

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
    public function getFoncLib()
    {
        return $this->foncLib;
    }

    /**
     * @param mixed $foncLib
     */
    public function setFoncLib($foncLib)
    {
        $this->foncLib = $foncLib;
    }



}