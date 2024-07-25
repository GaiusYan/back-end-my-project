<?php

namespace DOA;

interface dao
{
    public function create($entity);
    public function update($entity);
    public function delete($entity);
    public function findAll();
    public function find($id);
    public function findById($id);
    public function findAllBy($field,$value);
    public function findAllByArray($field,$value);
    public function findAllByArrayArray($field,$value);

}