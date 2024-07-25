<?php

namespace model;

class Annee
{

    private $id;
    private $annLib;

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
    public function getAnnLib()
    {
        return $this->annLib;
    }

    /**
     * @param mixed $annLib
     */
    public function setAnnLib($annLib)
    {
        $this->annLib = $annLib;
    }


}