<?php

namespace DOA;

use Connection\Connection;
use PDO;

class SessionRepository implements dao
{

    public function create($entity)
    {
       $connection = new Connection();
       $response = $connection->connect();
       $query = $response->prepare("insert into session (sessionUsername,sessionKey,sessionDate,statut) values (?,?,?,?)");
       $query->execute(array($entity->getSessionUsername(),$entity->getSessionKey(),$entity->getSessionDate(),$entity->getSessionStatus()));
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

    public function findSessionKeyAndUserId($sessionKey,$userId){
        $connection = new Connection();
        $response = $connection->connect();
        $query = $response->prepare("select * from session where sessionKey = :sessionKey and sessionUsername = :sessionUsername");
        $query->execute(["sessionKey" => $sessionKey, "sessionUsername" => $userId]);
        return $query->fetchAll(PDO::FETCH_OBJ);
    }
}