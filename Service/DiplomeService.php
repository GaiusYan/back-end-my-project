<?php

namespace Service;

use DOA\DiplomeRepository;

require '../../DOA/DiplomeRepository.php';
class DiplomeService
{

    public function getDiplomes(){
        $diplomeRespository = new DiplomeRepository();
        return $diplomeRespository->findAll();
    }
}