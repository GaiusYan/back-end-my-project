<?php

namespace Service;

require '../../DOA/RoleRepository.php';
use DOA\RoleRepository;

class RoleService
{

    private RoleRepository $roleRepository;

    public function __construct(RoleRepository $roleRepository){
        $this->roleRepository = $roleRepository;
    }

    public function getRoleById($id){
        return $this->roleRepository->findById($id);
    }

}