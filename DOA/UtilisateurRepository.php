<?php

namespace DOA;

use Connection\Connection;
use PDO;

class UtilisateurRepository implements dao
{

    public function create($entity)
    {
        // TODO: Implement create() method.
    }

    public function update($entity)
    {
        // TODO: Implement update() method.
    }

    public function delete($entity)
    {
        // TODO: Implement delete() method.
    }

    public function findAll()
    {
        // TODO: Implement findAll() method.
    }

    public function find($id)
    {
        // TODO: Implement find() method.
    }

    public function findById($id)
    {
        // TODO: Implement findById() method.
    }

    public function findAllBy($field, $value)
    {
        // TODO: Implement findAllBy() method.
    }

    public function findAllByArray($field, $value)
    {
        // TODO: Implement findAllByArray() method.
    }

    public function findAllByArrayArray($field, $value)
    {
        // TODO: Implement findAllByArrayArray() method.
    }

    public function findByUsernameAndPassword($username, $password){
        $connection = new Connection();
        $response = $connection->connect();
        $query = $response->prepare("select * from utilisateur where username = :username and password = :password");
        $query->execute(["username" => $username, "password" => $password]);
        return $query->fetchAll(PDO::FETCH_OBJ);
    }
}