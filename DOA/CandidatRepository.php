<?php

namespace DOA;

use Connection\Connection;
use PDO;




class CandidatRepository implements dao
{


    public function create($entity)
    {
        $connection = new Connection();
        $response = $connection->connect();
        $query = $response->prepare("insert into candidat(nom,prenom,adresse,telephone,email,dateNaissance,lieuNaissance,sexe,cni,anneeBac,mention,niveauEtud,resultat,pays,dateInscription,nomTuteur,prenomTuteur,telTuteur,emailTuteur,specialite,niveau,diplome,dernierEtablissement,dernierDiplome,statut,anneUnivPre,niveauEtudPrec) 
                                            values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
        $query->execute(array(
            $entity->getNom(),
            $entity->getPrenom(),
            $entity->getAdresse(),
            $entity->getTelephone(),
            $entity->getEmail(),
            $entity->getDateNaissance(),
            $entity->getLieuNaissance(),
            $entity->getSexe(),
            $entity->getPasseport(),
            $entity->getAnneeBac(),
            $entity->getMention(),
            $entity->getNiveauEtud(),
            $entity->getResultat(),
            $entity->getPays(),
            $entity->getDateInscription(),
            $entity->getTuteur()->getNom(),
            $entity->getTuteur()->getPrenom(),
            $entity->getTuteur()->getTelephone(),
            $entity->getTuteur()->getEmail(),
            $entity->getSpecialite(),
            $entity->getNiveau(),
            $entity->getDiplome(),
            $entity->getDernierEtablissement(),
            $entity->getDernierDiplome(),
            $entity->getStatut(),
            $entity->getAnneUnivPre(),
            $entity->getNiveauEtudPre()
        ));
    }

    public function update($entity)
    {
        // TODO: Implement update() method.
    }

    public function delete($entity)
    {
        // TODO: Implement delete() method.
    }

    public function find($id)
    {
        echo 'bonjour tout le monde';
    }

    public function findById($id)
    {
        $connection = new Connection();
        $response = $connection->connect();
        $query = $response -> prepare("select * from candidat where id =:id");
        $query-> execute(["id" => $id]);
        return $query-> fetchAll(PDO::FETCH_OBJ);
    }

    public function findByStatus($status){
        $connection = new Connection();
        $response = $connection->connect();
        $query = $response -> prepare("select * from candidat where statut =:statut");
        $query-> execute(["statut" => $status]);
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


    public function findAll()
    {
        $connection = new Connection();
        $response = $connection->connect();
        return $response->query("select * from candidat order by id")->fetchAll(PDO::FETCH_OBJ);
    }

    public function findByEmail($email): int
    {
        $connection = new Connection();
        $response = $connection->connect();
        $query = $response -> prepare("select * from candidat where email =:email");
        $query-> execute(["email" => $email]);
        $query->fetch(PDO::FETCH_OBJ);
        return $query-> rowCount();
    }


    public function updateStatus($id, $statut): bool
    {
        $connection = new Connection();
        $response = $connection->connect();
        $query = $response -> prepare("update candidat set statut =:statut where id =:id");
        return $query-> execute(["statut" => $statut, "id" => $id]);
    }
}