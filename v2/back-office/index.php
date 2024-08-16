<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-headers: *");

use DOA\RoleRepository;
use model\Session;
use model\Utilisateur;
use Service\CandidatService;
use Service\RoleService;
use Service\SessionService;
use Service\UtilisateurService;

require '../../Connection/connection.php';
require '../../model/Personne.php';
require '../../model/Utilisateur.php';
require '../../model/Session.php';
require '../../model/Role.php';
require '../../DOA/dao.php';
require '../../Service/UtilisateurService.php';
require '../../Service/candidatService.php';
require '../../Service/RoleService.php';

$requesMethod = $_SERVER['REQUEST_METHOD'];
$requestUri = $_SERVER['REQUEST_URI'];
$utilisateurService = new UtilisateurService();
$candidatService = new CandidatService();
$roleService = new RoleService(new RoleRepository());



    //Dashboard information
    //total
    if($requesMethod=='GET' and file_get_contents('php://input') !== null and explode('/', $requestUri)[4] == 'all-candidature') {

        echo json_encode($candidatService->countAllCandidature());
    }


    if($requesMethod=='GET' and file_get_contents('php://input') !== null and explode('/', $requestUri)[4] == 'accept-candidature') {

        echo json_encode($candidatService->countCandidature(1));
    }

    if($requesMethod=='GET' and file_get_contents('php://input') !== null and explode('/', $requestUri)[4] == 'reject-candidature') {

        echo json_encode($candidatService->countCandidature(-1));
    }

    if($requesMethod=='GET' and file_get_contents('php://input') !== null and explode('/', $requestUri)[4] == 'wait-candidature') {

        echo json_encode($candidatService->countCandidature(0));
    }


    if($requesMethod=='GET' and file_get_contents('php://input') !== null and explode('/', $requestUri)[4] == 'all-candidatures') {

        echo json_encode($candidatService->getCandidatures());
    }



    if($requesMethod=='GET' and file_get_contents('php://input') !== null and explode('/', $requestUri)[4] == 'user-online') {

        $id = explode('/', $requestUri)[5];
        echo json_encode($utilisateurService->getUserById($id));
    }

    if($requesMethod=='GET' and file_get_contents('php://input') !== null and explode('/', $requestUri)[4] == 'user-role-online') {

        $id = explode('/', $requestUri)[5];
        echo json_encode($roleService->getRoleById($id));
    }


