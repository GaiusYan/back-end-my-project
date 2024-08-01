<?php

namespace DOA;

use Connection\Connection;
use PDO;




class NiveauRepository implements dao
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
        $connection = new Connection();
        $response = $connection->connect();
        return $response->query("select * from niveau order by nivId")->fetchAll(PDO::FETCH_ASSOC);
    }

    public function find($id)
    {
        // TODO: Implement findAllBy() method.
    }

    public function findById($id)
    {
        $connection = new Connection();
        $response = $connection->connect();
        $query = $response -> prepare("select * from niveau where nivId =:id");
        $query-> execute(["id" => $id]);
        return $query-> fetchAll(PDO::FETCH_OBJ);
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
}