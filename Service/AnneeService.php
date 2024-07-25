<?php

namespace Service;

use DOA\AnneeRepository;

require '../../DOA/AnneeRepository.php';
class AnneeService
{

    public function getAnnees(){
        $anneeRepository = new AnneeRepository();
        return $anneeRepository->findAll();
    }

}