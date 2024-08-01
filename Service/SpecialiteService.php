<?php

namespace Service;


use DOA\SpecialiteRepository;

require '../../DOA/SpecialiteRepository.php';
class SpecialiteService
{
    public function getSpecialites(){
        $specialiteRepository = new SpecialiteRepository();
        return $specialiteRepository->findAll();
    }

    public function getSpecialite($id){
        $specialiteRepository = new SpecialiteRepository();
        return $specialiteRepository->findById($id);
    }
}