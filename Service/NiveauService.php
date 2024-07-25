<?php

namespace Service;


use DOA\NiveauRepository;

require '../../DOA/NiveauRepository.php';

class NiveauService
{
    public function getNiveaux(){
        $niveauRepository = new NiveauRepository();
        return $niveauRepository->findAll();
    }

}