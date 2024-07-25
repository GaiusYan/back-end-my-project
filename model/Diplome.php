<?php

namespace model;

class Diplome
{
    private $id;
    private $diplome;

    /**
     * @param $id
     * @param $diplome
     */
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
    public function getDiplome()
    {
        return $this->diplome;
    }

    /**
     * @param mixed $diplome
     */
    public function setDiplome($diplome)
    {
        $this->diplome = $diplome;
    }



}